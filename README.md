curl --user alejandroc_89@hotmail.com:password http://127.0.0.1:8000/api/notes

curl --user alejandroc_89@hotmail.com:password -d "{"title":"testTitle","body":"testNote"}" -H "Content-Type: application/json" http://127.0.0.1:8000/api/notes

curl --user alejandroc_89@hotmail.com:password -X DELETE http://127.0.0.1:8000/api/notes/1
