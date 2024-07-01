<!doctype html>
<html lang="en">

<head>
    <title>Edit Profile | Bevis Africa</title>
    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>
</head>

<body>
    <div class="preloader">
        <img src="assets/images/preloader.svg" alt="Pre-loader">
    </div>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="assets/images/bevis-logo.jpg" alt="Logo" class="logo-navbar me-2" style="max-height: 40px;">
                <span>Customer Dashboard</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="edit-profile.php">Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dash.php#applications">My Applications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dash.php#apply">Apply Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- =======================
Profile -->
    <section class="p-0 d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <!-- Right -->
                <div class="col-12 col-md-10 col-xl-8 mx-auto my-5">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Edit Profile</h2>
                            <h5 class="fw-light">Update your account details.</h5>
                            <div class="form mt-4">
                                <div>
                                    <p class="text-start mb-2">First and Last Name</p>
                                    <span class="form-group"><input type="text" class="form-control" placeholder="Enter your full name"></span>
                                </div>
                                <div>
                                    <p class="text-start mb-2">County in Kenya</p>
                                    <span class="form-group"><input type="text" class="form-control" placeholder="Enter your county"></span>
                                </div>
                                <div>
                                    <p class="text-start mb-2">Email address</p>
                                    <span class="form-group"><input type="email" class="form-control" placeholder="Enter your email"></span>
                                </div>
                                <div>
                                    <p class="text-start mb-2">Phone Number</p>
                                    <span class="form-group"><input type="tel" class="form-control" placeholder="Enter your phone number"></span>
                                </div>
                                <div>
                                    <p class="text-start mb-2">I represent</p>
                                    <span class="form-group">
                                        <select class="form-control">
                                            <option value="">Select an option</option>
                                            <option value="Farmer">Farmer</option>
                                            <option value="Fisherman">Fisherman</option>
                                            <option value="Pastoralist">Pastoralist</option>
                                            <option value="Artisanal Miner">Artisanal Miner</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-start mb-2">Farming Type</p>
                                    <span class="form-group">
                                        <select class="form-control">
                                            <option value="">Select an option</option>
                                            <option value="Crop Farming">Crop Farming</option>
                                            <option value="Livestock Farming">Livestock Farming</option>
                                            <option value="Mixed Farming">Mixed Farming</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-start mb-2">Type of Carbon Offset</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="soilCarbon">
                                                <label class="form-check-label" for="soilCarbon">Soil Carbon</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="forestCarbon">
                                                <label class="form-check-label" for="forestCarbon">Forest Carbon</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end mt-4">
                                    <button class="btn btn-dark">Save Changes</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2>Change Password</h2>
                            <h5 class="fw-light">Update your password.</h5>
                            <div class="form mt-4">
                                <div>
                                    <p class="text-start mb-2">Current Password</p>
                                    <span class="form-group"><input type="password" class="form-control" placeholder="Enter your current password"></span>
                                </div>
                                <div>
                                    <p class="text-start mb-2">New Password</p>
                                    <span class="form-group"><input type="password" class="form-control" placeholder="Enter your new password"></span>
                                </div>
                                <div>
                                    <p class="text-start mb-2">Confirm New Password</p>
                                    <span class="form-group"><input type="password" class="form-control" placeholder="Confirm your new password"></span>
                                </div>
                                <div class="text-end mt-4">
                                    <button class="btn btn-dark">Change Password</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
Profile -->

    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>
</body>

</html>