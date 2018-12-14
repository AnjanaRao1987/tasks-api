# tasks-api
REST api for tasks


# Method = Get
- Link = /api/tasks
- Request Body = Null
- Expected Response = 

{
    "data": [
        {
            "id": 307,
            "task": "Revision Css 1.1",
            "completed": true
        },
        {
            "id": 308,
            "task": "Revision PHP",
            "completed": true
        },
        {
            "id": 309,
            "task": "Revision GIT",
            "completed": true
        }
   ]
}


# Method = Post
- Link = /api/tasks
- Request Body 
        {
	        "task": "one more edit"
        }
- Expected Response = 
{
    "data": {
        "id": 317,
        "task": "one more edit",
        "completed": false
    }
}


# Method = Put
- Link = /api/tasks/317
- Request Body 
        {
	        "task": "one more edit - update"
        }
- Expected Response = 
{
    "data": {
        "id": 317,
        "task": "one more edit - update",
        "completed": false
    }
}

# Method = Patch
- Link = /api/tasks/317/completed
- Request Body = null
- Expected Response = 
{
    "data": {
        "id": 317,
        "task": "one more edit - update",
        "completed": True
    }
}


# Method = Delete
- Link = /api/tasks/317
- Request Body = null
- Expected Response = null






