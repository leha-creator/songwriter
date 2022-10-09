# Songwriter server

An application that provides an API for a client. Allows you to create, modify and view songs, song lists.

# Requests

> All requests must contain the header "Accept: application/json"


## Song

<details><summary>Get all songs</summary>
<p>
URL: {host_url}/api/songs

Method: GET

Response:
```JSON
[
    {
        "id": 13,
        "title": "Arcade",
        "songcontent": [
            {
                "type": "verse",
                "text": "A broken heart is all that's left\nI'm still fixing all the cracks\nLost a couple ofpieces when\nI carried it, carried it, carried it home"
            },
            {
                "type": "verse",
                "text": "I'm afraid of all I am\nMy mind feels like a foreign land\nSilence ringing inside my head\nPlease carry me, carry me, carry me home"
            },
            {
                "type": "verse",
                "text": "I've spent all of the love I saved\nWe were always a losing game\nSmall town boy in a big arcade\nI got addicted to a losing game"
            }
        ],
        "created_at": "2022-10-09T19:54:01.000000Z",
        "updated_at": "2022-10-09T19:54:01.000000Z"
    }
]
```

</p>
</details>

<details><summary>Get song</summary>
<p>
URL: {host_url}/api/songs/{song_id}

Method: GET

Params:
- song_id: number, ID of an existing song

Response:
```JSON
{
    "id": 13,
    "title": "Arcade",
    "songcontent": [
        {
            "type": "verse",
            "text": "A broken heart is all that's left\nI'm still fixing all the cracks\nLost a couple ofpieces when\nI carried it, carried it, carried it home"
        },
        {
            "type": "verse",
            "text": "I'm afraid of all I am\nMy mind feels like a foreign land\nSilence ringing inside my head\nPlease carry me, carry me, carry me home"
        },
        {
            "type": "verse",
            "text": "I've spent all of the love I saved\nWe were always a losing game\nSmall town boy in a big arcade\nI got addicted to a losing game"
        }
    ],
    "created_at": "2022-10-09T19:54:01.000000Z",
    "updated_at": "2022-10-09T19:54:01.000000Z"
}
```

</p>
</details>

<details><summary>Add song</summary>
<p>
URL: {host_url}/api/songs

Method: POST

Params:
- headers
  - Authorization: "bearer token"
- request body:
  - title: string, max - 256
  - songcontent: valid json, array of verses <br>
  ```JSON
    [
      {
        "type" : "verse",
        "text" : "Verse text"
      },
      {
        "type" : "verse",
        "text" : "Verse text"
      }
    ]
  ```
  

Response:
```JSON
{
    "title": "Arcade",
    "songcontent": [
        {
            "type": "verse",
            "text": "A broken heart is all that's left\nI'm still fixing all the cracks\nLost a couple ofpieces when\nI carried it, carried it, carried it home"
        },
        {
            "type": "verse",
            "text": "I'm afraid of all I am\nMy mind feels like a foreign land\nSilence ringing inside my head\nPlease carry me, carry me, carry me home"
        },
        {
            "type": "verse",
            "text": "I've spent all of the love I saved\nWe were always a losing game\nSmall town boy in a big arcade\nI got addicted to a losing game"
        }
    ],
    "updated_at": "2022-10-09T20:54:14.000000Z",
    "created_at": "2022-10-09T20:54:14.000000Z",
    "id": 14
}
```

</p>
</details>


<details><summary>Delete song</summary>
<p>
URL: {host_url}/api/songs/{song_id}

Method: DELETE

Params:
- song_id: number, ID of an existing song
- headers
    - Authorization: "bearer token"

Response:
```JSON
[]
```

</p>
</details>


<details><summary>Update song</summary>
<p>
URL: {host_url}/api/songs/{song_id}

Method: PATCH

Params:
- song_id: number, ID of an existing song
- headers
    - Authorization: "bearer token"
- request body:
    - title: string, max - 256
    - songcontent: valid json, array of verses <br>
  ```JSON
    [
      {
        "type" : "verse",
        "text" : "Verse text"
      },
      {
        "type" : "verse",
        "text" : "Verse text"
      }
    ]
  ```

Response:
```JSON
{
    "title": "Arcade",
    "songcontent": [
        {
            "type": "verse",
            "text": "A broken heart is all that's left\nI'm still fixing all the cracks\nLost a couple ofpieces when\nI carried it, carried it, carried it home"
        },
        {
            "type": "verse",
            "text": "I'm afraid of all I am\nMy mind feels like a foreign land\nSilence ringing inside my head\nPlease carry me, carry me, carry me home"
        },
        {
            "type": "verse",
            "text": "I've spent all of the love I saved\nWe were always a losing game\nSmall town boy in a big arcade\nI got addicted to a losing game"
        }
    ],
    "updated_at": "2022-10-09T20:54:14.000000Z",
    "created_at": "2022-10-09T20:54:14.000000Z",
    "id": 14
}
```

</p>
</details>

## Bearer token

<details><summary>Get token</summary>
<p>
URL: {host_url}/api/login

Method: POST

Params:

- request body:
    - email: correct email
    - password: string

Response:
```JSON
{
    "data": {
        "token": "bearer token"
    }
}
```

</p>
</details>


## Song lists

<details><summary>Get all song lists</summary>
<p>
URL: {host_url}/api/songlists

Method: GET

Response:
```JSON
[
    {
        "id": 24,
        "name": "Song list 1",
        "planned_date": "2003-01-22",
        "created_at": "2022-10-09T21:03:51.000000Z",
        "updated_at": "2022-10-09T21:03:51.000000Z"
    }
]
```

</p>
</details>

<details><summary>Get song list</summary>
<p>
URL: {host_url}/api/songlists/{songlist_id}

Method: GET

Params:
- songlist_id: number, ID of an existing song list

Response:
```JSON
{
    "id": 24,
    "name": "Song list 1",
    "planned_date": "2003-01-22",
    "created_at": "2022-10-09T21:03:51.000000Z",
    "updated_at": "2022-10-09T21:03:51.000000Z",
    "songs": [
        {
            "id": 13,
            "title": "Arcade",
            "songcontent": [
                {
                    "type": "verse",
                    "text": "A broken heart is all that's left\nI'm still fixing all the cracks\nLost a couple ofpieces when\nI carried it, carried it, carried it home"
                },
                {
                    "type": "verse",
                    "text": "I'm afraid of all I am\nMy mind feels like a foreign land\nSilence ringing inside my head\nPlease carry me, carry me, carry me home"
                },
                {
                    "type": "verse",
                    "text": "I've spent all of the love I saved\nWe were always a losing game\nSmall town boy in a big arcade\nI got addicted to a losing game"
                }
            ],
            "created_at": "2022-10-09T19:54:01.000000Z",
            "updated_at": "2022-10-09T19:54:01.000000Z",
            "pivot": {
                "song_list_id": 24,
                "song_id": 13,
                "song_number": 0
            }
        }
    ]
}
```

</p>
</details>

<details><summary>Add song list</summary>
<p>
URL: {host_url}/api/songlists

Method: POST

Params:
- headers
    - Authorization: "bearer token"
      - request body:
    ```JSON
    {
        "name" : "Song list 1",
        "planned_date" : "2003-01-22",
        "songs" : [
            {
                "id" : 13,
                "song_number" : 0
            }
        ]
    }
    ```


Response:
```JSON
{
    "name": "Song list 1",
    "planned_date": "2003-01-22",
    "updated_at": "2022-10-09T21:03:51.000000Z",
    "created_at": "2022-10-09T21:03:51.000000Z",
    "id": 24
}
```

</p>
</details>


<details><summary>Delete song list</summary>
<p>
URL: {host_url}/api/songlists/{songlists_id}

Method: DELETE

Params:
- songlists_id: number, ID of an existing song list
- headers
    - Authorization: "bearer token"

Response:
```JSON
[]
```

</p>
</details>


<details><summary>Update song list</summary>
<p>
URL: {host_url}/api/songlists/{songlists_id}

Method: PATCH

Params:
- songlists_id: number, ID of an existing song
- headers
    - Authorization: "bearer token"
- request body:
  ```JSON
    {
      "name" : "name",
      "attached_songs" : [
        {
            "id" : 8,
            "song_number" : 3
        }
      ],
    "detached_songs" : [10, 11]
    }
  ```

Response:
```JSON
{
    "id": 24,
    "name": "Song list 1",
    "planned_date": "2003-01-22",
    "created_at": "2022-10-09T21:03:51.000000Z",
    "updated_at": "2022-10-09T21:03:51.000000Z",
    "songs": [
        {
            "id": 13,
            "title": "Arcade",
            "songcontent": [
                {
                    "type": "verse",
                    "text": "A broken heart is all that's left\nI'm still fixing all the cracks\nLost a couple ofpieces when\nI carried it, carried it, carried it home"
                },
                {
                    "type": "verse",
                    "text": "I'm afraid of all I am\nMy mind feels like a foreign land\nSilence ringing inside my head\nPlease carry me, carry me, carry me home"
                },
                {
                    "type": "verse",
                    "text": "I've spent all of the love I saved\nWe were always a losing game\nSmall town boy in a big arcade\nI got addicted to a losing game"
                }
            ],
            "created_at": "2022-10-09T19:54:01.000000Z",
            "updated_at": "2022-10-09T19:54:01.000000Z",
            "pivot": {
                "song_list_id": 24,
                "song_id": 13,
                "song_number": 0
            }
        }
    ]
}
```

</p>
</details>

## TODO 

- [x] JWT token authorization
- [ ] Separation for different owners
- [ ] Complete API documentation (Detailed description of parameters, description of errors)
- [ ] Soft delete songs
