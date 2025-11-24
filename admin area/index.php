<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <title>Admin</title>
</head>

<body>
    <div class="admin-full-screen row">
        <div class="admin-navbar col-md-2">
            <div class="admin-navbar-control">
                <div class="admin-navbar-head row">
                    <h2>admin</h2>
                </div>
                <div class="admin-navbar-control-ul">
                    <ul>
                        <li>Dashboard</li>
                        <li>Dashboard</li>
                        <li>Dashboard</li>
                        <li>Dashboard</li>
                        <li>Dashboard</li>
                        <li>Dashboard</li>
                        <li>Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="admin-main-body col-md-10">
            <div class="admin-main-body-header">
                <div class="admin-main-body-header-nav-pannel row">
                    <div class="nav-pannel-notification-segment col-md-4">
                        <ul>
                            <li><i class="bi bi-bell"></i><sup>1</sup></li>
                            <li><i class="bi bi-chat-right"></i><sup>1</sup></li>
                        </ul>
                        <div class="nav-pannel-user row">
                            <div class="nav-pannel-user-profile-picture col-md-5">
                                <img src="../Saujas1.png" alt="">
                            </div>
                            <div class="nav-pannel-user-detail col-md-7">
                                <p class="nav-pannel-user-name">
                                    Saujas
                                </p>
                                <p class="nav-pannel-user-posts">
                                    CEO
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="admin-main-body-segment-first row">
                <div class="col-md-3 admin-dashboard-card-first dashboard-card-user-count-segment">
                    <div class="dashboard-card-user-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="dashboard-card-user-count">
                        10000
                    </div>
                    <div class="dashboard-card-user-name">
                        Total Users
                    </div>
                </div>
                <div class="col-md-3 admin-dashboard-card-first">
                    <div class="dashboard-card-product-icon">
                        <i class="bi bi-gift-fill"></i>
                    </div>
                    <div class="dashboard-card-product-count">
                        10000
                    </div>
                    <div class="dashboard-card-product-name">
                        Total Items
                    </div>
                </div>
                <div class="col-md-3 admin-dashboard-card-first">
                    <div class="dashboard-card-sale-icon">
                        <i class="bi bi-clipboard-data-fill"></i>
                    </div>
                    <div class="dashboard-card-sale-count">
                        10000
                    </div>
                    <div class="dashboard-card-sale-name">
                        Total Sale
                    </div>
                </div>
            </div>
            <div class="admin-main-body-segment-second row">
                <div class="col-md-5 admin-dashboard-card-second">
                    <div class="card-second-header">
                        <h3>Top Users</h3>
                    </div>
                    <div class="card-second-user-table">
                        <table>
            
                            <tr>
                                <th style="width: 2rem;">User Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone No</th>
                                <th>Email Address</th>
                                <th>Email Address</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Saujas</td>
                                <td>Khanal</td>
                                <td>9761530843</td>
                                <td>saujaskhanal@gmail.com</td>
                                <td>saujaskhanal@gmail.com</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Saujasssssssssss</td>
                                <td>Khanalllllllll</td>
                                <td>9761530843</td>
                                <td>saujaskhanal@gmail.com</td>
                                <td>saujaskhanal@gmail.com</td>
                            </tr>
                        </table>
                    </div>

                </div>
                <div class="col-md-5 admin-dashboard-card-second">
                    <div class="card-second-header">
                        <h3>Latest Products</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>