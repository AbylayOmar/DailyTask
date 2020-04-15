<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>DailyTasks</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="h2">Doc Daily Task</p>
                <p>Don't forget provide headers when you make api calls</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col-sm-3">#</th>
                        <th scope="col-sm-3">API</th>
                        <th scope="col-sm-3">METHOD</th>
                        <th scope="col-sm-3">RESULT</th>
                        <th scope="col-sm-3">opt</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>http://daily.prosthesis.kz/api/v1/login</td>
                        <td>POST</td>
                        <td><pre id ="login"></pre></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>http://daily.prosthesis.kz/api/v1/daily/1</td>
                        <td>GET</td>
                        <td><pre id ="daily"></pre></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>http://daily.prosthesis.kz/api/v1/challenges</td>
                        <td>GET</td>
                        <td><pre id ="challenges"></pre></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>

    <script  type="application/javascript">
        var login = {
            "success": true,
            "message": "Success! you are logged in successfully",
            "user": {
                "id": 1,
                "name": "Abylay",
                "email": "admin",
                "email_verified_at": null,
                "created_at": "2020-04-15T08:32:49.000000Z",
                "updated_at": "2020-04-15T08:32:49.000000Z",
                "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjMz"
            }
        }
        document.getElementById("login").textContent = JSON.stringify(login, undefined, 4);
        var daily = [
                        {
                            "id": 1,
                            "name": null,
                            "desc_link": null,
                            "count": 5
                        },
                        {
                            "id": 2,
                            "name": null,
                            "desc_link": "https://www.youtube.com/watch?v=N771fkruaNI",
                            "count": 10
                        }
                    ]
                    
        document.getElementById("daily").textContent = JSON.stringify(daily, undefined, 4);

        var challenges = [
                        {
                            "id": 1,
                            "name": "Ramazan Challange",
                            "price": 0,
                            "is_free": 1,
                            "image_url": null,
                            "url": "https:://google.com",
                            "created_at": "2020-04-15T08:32:49.000000Z",
                            "updated_at": "2020-04-15T08:32:49.000000Z"
                        },
                        {
                            "id": 2,
                            "name": "Book reading Challange",
                            "price": 1000,
                            "is_free": 0,
                            "image_url": null,
                            "url": "https:://google.com",
                            "created_at": "2020-04-15T08:32:49.000000Z",
                            "updated_at": "2020-04-15T08:32:49.000000Z"
                        }
                    ]
                    
        document.getElementById("challenges").textContent = JSON.stringify(challenges, undefined, 4);
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>