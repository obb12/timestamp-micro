<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Timestamp microservice</title>
  </head>
  <body>
  <h2>API Project: Timestamp Microservice</h2>
  <h3>User Stories (WIP):</h3>
  <ol>
    <li>The API endpoint is GET [project_url]/api/timestamp/:date_string?</li>
    <li>A date string is valid if can be successfully parsed by new Date(date_string).
Note that the unix timestamp needs to be an integer (not a string) specifying milliseconds.
In our test we will use date strings compliant with ISO-8601 (e.g. "2016-11-20") because this will ensure an UTC timestamp.</li>
<li>If the date string is empty it should be equivalent to trigger Carbon::parse, i.e. the service uses the current timestamp.</li>
<li>If the date string is <strong>valid</strong> the api returns a JSON having the structure<br><code>{"unix": &lt;$date&gt;, "utc" : &lt;$date->timestamp&gt; }</code><br>
            e.g. <code>{"unix": 1479663089000 ,"utc": "Sun, 20 Nov 2016 17:31:29 GMT"}</code></li>
            <li>If the date string is <strong>invalid</strong> the api returns a JSON having the structure <br>
              <code>{"error" : "Invalid Date" }</code>.
          </li>
  </ol>
  <h3>Example Usage:</h3>
  <ul>
          <li><a href="api/timestamp/2015-12-25">
            [project url]/api/timestamp/2015-12-25</a></li>
          <li><a href="api/timestamp/1450137600000">[project url]/api/timestamp/1450137600</a></li>
        </ul>
        <h3>Example Output:</h3>
        <p>
          <code>{"unix":1451001600000, "utc":"Fri, 25 Dec 2015 00:00:00 GMT"}</code>
        </p>
  </body>
</html>
