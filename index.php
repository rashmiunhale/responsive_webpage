<!DOCTYPE html>
<html>
    <head>
        <title>Admin dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link rel="stylesheet" type="text/css" href="master.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
<body>
    <input type="checkbox" id="checkbox">
    <header class="header">
        <h2 class="h-name">Admin <b>Panel</b>
            <label for="checkbox">
                <i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
            </label>
        </h2>

        <i class="fa fa-user-circle" aria-hidden="true"></i>
    </header>
    <div class="body">
        <nav class="side-bar">
            <div class="user-img">
                <img src="imagesigyh.jpg">
                <h4>Sakshi Nair</h4>
                <p><i class="fa fa-circle text-success"></i> Online</p>
            </div>
            <ul>
                <li>
                    <a href="#"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users" aria-hidden="true"></i><span>Employees</span></a>
                </li>
                <li>
                    <a href="#"><i class="far fa-calendar-check"></i><span>Attendance</span></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-money-check-alt"></i><span>Salary</span></a>
                </li>
                <li>
                    <a href="#"><i class="far fa-file-alt"></i><span>Reports</span></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-user-cog"></i><span>Settings</span></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-power-off"></i><span>Log out</span></a>
                </li>
      
            </ul>
        </nav>
        <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3" id="box1">
                        <div class="p-3 bg-success shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3>45</h3>
                                <p>Total Employees</p>
                            </div>
                            <i class="fas fa-user border rounded-full  p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3>85%</h3>
                                <p>On Time Percentage</p>
                            </div>
                            <i class="fa fa-pie-chart border rounded-full p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-warning shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3>38</h3>
                                <p>On Time Today</p>
                            </div>
                            <i class="fa fa-clock border rounded-full p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-danger shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3>7</h3>
                                <p>Late Today</p>
                            </div>
                            <i class="fa fa-clock-o border rounded-full p-3"></i>
                        </div>
                    </div>
                </div>
    </div>
</body>
</html>
