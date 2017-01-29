# Smart Output - [![Build Status](https://travis-ci.org/professorhaseeb/smartOutput.svg?branch=master)](https://travis-ci.org/professorhaseeb/smartOutput)

##Usage
```php
// setup class
$so = new smartOutput();
```
Setting Response:
```php
//set response code in first parameter and the response output in the second
$so->setResponse(0,"RESPONSE DATA");
// Array can be passed too
// $arr = ("request" => "true");
// $so->setResponse(0,$arr);
```
Get Response:
```php
echo json_encode($so->getResponse());
```
Output:
```json
{
  "status_code": 0,
  "status": "success",
  "message": "Request successfull",
  "response": "RESPONSE DATA"
}
```
