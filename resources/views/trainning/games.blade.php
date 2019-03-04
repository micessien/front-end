@extends('layouts.default')

@section('title', 'Plays')

@section('content')
    <main>
        <div id="results">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="breadcrumb">
                            <div class="container">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Trainning</a></li>
                                    <li>Plays</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /results -->

        <div class="container margin_60_35">
            <div class="wizard-v5-content">
                <div class="wizard-form">
                    <form class="form-register" id="form-register" action="#" method="post">
                        <div id="form-total">
                            <!-- SECTION 1 -->
                            <h2>
                                <span class="step-icon"><i class="zmdi zmdi-check"></i></span>
                                <span class="step-text">Personal Information</span>
                            </h2>
                            <section>
                                <div class="inner">
                                    <div class="form-row">
                                        <div id="radio">
                                            <label for="answer1">answer1:</label>
                                            <label><input type="radio" name="answer1" value="tres bon" checked> Tres bon</label>
                                            <label><input type="radio" name="answer1" value="excellent"> Excellent</label>
                                            <label><input type="radio" name="answer1" value="bien"> Bien</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="toto" id="step1_1">
                                            <label class="form-check-label" for="step1_1">
                                                Nouvelle questions
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </section>  
                            <!-- SECTION 2 -->
                            <h2>
                                <span class="step-icon"><i class="zmdi zmdi-check"></i></span>
                                <span class="step-text">Bank Information</span>
                            </h2>
                            <section>
                                <div class="inner">
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="toto" id="step1_1">
                                            <label class="form-check-label" for="step1_1">
                                                Nouvelle questions
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="toto" id="step1_1">
                                            <label class="form-check-label" for="step1_1">
                                                Nouvelle questions
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="toto" id="step1_1">
                                            <label class="form-check-label" for="step1_1">
                                                Nouvelle questions
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="toto" id="step1_1">
                                            <label class="form-check-label" for="step1_1">
                                                Nouvelle questions
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- SECTION 3 -->
                            <h2>
                                <span class="step-icon"><i class="zmdi zmdi-check"></i></span>
                                <span class="step-text">Confirm Details</span>
                            </h2>
                            <section>
                                <div class="inner">
                                    <h3>Comfirm Details</h3>
                                    <div class="form-row table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr class="space-row">
                                                    <th>Full Name:</th>
                                                    <td id="fullname-val"></td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th>Email Address:</th>
                                                    <td id="email-val"></td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th>Phone Number:</th>
                                                    <td id="phone-val"></td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th>Address Location:</th>
                                                    <td id="address-val"></td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th>answer1:</th>
                                                    <td id="answer1-val"></td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th>Account Name:</th>
                                                    <td id="account-name-val"></td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th>Account Number:</th>
                                                    <td id="account-number-val"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /container -->

	</main>
    <!-- /main -->
@endsection