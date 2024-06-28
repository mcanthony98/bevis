<!doctype html>
<html lang="en">

<head>
    <title>User Dashboard | Bevis Africa</title>
    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>
</head>

<body>
    <div class="preloader">
        <img src="assets/images/preloader.svg" alt="Pre-loader">
    </div>

    <!-- =======================
Profile -->
    <section class="p-0 d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <!-- left -->
                <div class="col-12 col-md-5 col-lg-4 d-md-flex align-items-center vh-100" style="background-color: #2bb673;">
                    <div class="w-100 p-3 p-lg-5 all-text-white">
                        <div class="justify-content-center align-self-center">
                            <!-- Image Logo -->
                            <img src="assets/images/bevis-logo.jpg" alt="Logo" class="logo-auth mb-4">
                        </div>
                        <h3 class="fw-light">Manage your account details</h3>
                        <ul class="list-group list-group-borderless mt-4">
                            <li class="list-group-item text-white"><i class="fa fa-check"></i>Update your personal information</li>
                            <li class="list-group-item text-white"><i class="fa fa-check"></i>Change your password</li>
                            <li class="list-group-item text-white"><i class="fa fa-check"></i>Manage your preferences</li>
                        </ul>
                    </div>
                </div>
                <!-- Right -->
                <div class="col-12 col-md-7 col-xl-8 mx-auto my-5">
                    <div class="row h-100">
                        <div class="col-12 col-md-10 col-lg-5 text-start mx-auto d-flex align-items-center">
                            <div class="w-100">
                                <h2>Edit Profile</h2>
                                <h5 class="fw-light">Update your account details.</h5>
                                <div class="form mt-4 ">
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