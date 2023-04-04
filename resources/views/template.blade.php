<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container col-xl-10 col-xxl-8 px-4 py-5 font-monospace">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-thin lh-1 mb-5">
                Login
            </h1>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 text-black-50 bg-light" method="post" action="/login">
                <div class="form-floating mb-3">
                    <input name="user" type="text" class="form-control" id="user" placeholder="id">
                    <label for="user"> User </label>
                </div>
                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control" id="password" placeholder="password">
                    <label for="password"> Password </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">
                    Sign In
                </button>
            </form>
        </div>
    </div>
</div>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="d-flex align-items-center justify-content-center">
        <form method="post" action="/logout">
            <button class="w-100 btn btn-lg btn-danger px-5 py-2" type="submit">
                Sign Out
            </button>
        </form>
    </div>
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-light lh-1 my-5">
                To-Do List
            </h1>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="/todolist">
                <div class="form-floating mb-3 text-black-50">
                    <input type="text" class="form-control" name="todo" placeholder="todo">
                    <label for="todo"> To Do </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">
                    Add a Task
                </button>
            </form>
        </div>
    </div>
    <div class="row align-items-right g-lg-5 py-5">
        <div class="mx-auto">
            <form id="deleteForm" method="post" style="display: none">

            </form>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col"> # </th>
                    <th scope="col"> Tasks </th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">
                        1
                    </th>
                    <td>
                        PWeb Midterm - IF IUP 2022/2023
                    </td>
                    <td>
                        <button class="w-100 btn btn-lg btn-outline-danger" type="submit">
                            Remove
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>