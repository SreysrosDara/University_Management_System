<section class="w-100 px-4 py-5 gradient-custom" style="border-radius: .5rem .5rem 0 0;">
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #f093fb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
    <div class="row justify-content-center" bis_skin_checked="1">
        <div class="col-12 col-lg-9 col-xl-9" bis_skin_checked="1">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;" bis_skin_checked="1">
                <div class="card-body p-4 p-md-5" bis_skin_checked="1">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                    <form>

                        <div class="row" bis_skin_checked="1">
                            <div class="col-md-6 mb-4" bis_skin_checked="1">

                                <div data-mdb-input-init="" class="form-outline" data-mdb-input-initialized="true"
                                    bis_skin_checked="1">
                                    <label class="form-label" for="firstName" style="margin-left: 0px;">First
                                        Name</label>
                                    <input type="text" id="firstName" class="form-control form-control-lg">
                                    <div class="form-notch" bis_skin_checked="1">
                                        <div class="form-notch-leading" style="width: 9px;" bis_skin_checked="1"></div>
                                        <div class="form-notch-middle" style="width: 70.4px;" bis_skin_checked="1">
                                        </div>
                                        <div class="form-notch-trailing" bis_skin_checked="1"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 mb-4" bis_skin_checked="1">

                                <div data-mdb-input-init="" class="form-outline" data-mdb-input-initialized="true"
                                    bis_skin_checked="1">
                                    <label class="form-label" for="lastName" style="margin-left: 0px;">Last Name</label>
                                    <input type="text" id="lastName" class="form-control form-control-lg">
                                    <div class="form-notch" bis_skin_checked="1">
                                        <div class="form-notch-leading" style="width: 9px;" bis_skin_checked="1"></div>
                                        <div class="form-notch-middle" style="width: 69.6px;" bis_skin_checked="1">
                                        </div>
                                        <div class="form-notch-trailing" bis_skin_checked="1"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row" bis_skin_checked="1">
                            <div class="col-md-6 mb-4 d-flex align-items-center" bis_skin_checked="1">

                                <div data-mdb-input-init="" class="form-outline datepicker w-100"
                                    data-mdb-input-initialized="true" bis_skin_checked="1">
                                    <label for="birthdayDate" class="form-label"
                                        style="margin-left: 0px;">Birthday</label>
                                    <input type="text" class="form-control form-control-lg" id="birthdayDate">
                                    <div class="form-notch" bis_skin_checked="1">
                                        <div class="form-notch-leading" style="width: 9px;" bis_skin_checked="1"></div>
                                        <div class="form-notch-middle" style="width: 55.2px;" bis_skin_checked="1">
                                        </div>
                                        <div class="form-notch-trailing" bis_skin_checked="1"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 mb-4" bis_skin_checked="1">

                                <h6 class="mb-2 pb-1">Gender: </h6>

                                <div class="form-check form-check-inline" bis_skin_checked="1">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="femaleGender" value="option1" checked="">
                                    <label class="form-check-label" for="femaleGender">Female</label>
                                </div>

                                <div class="form-check form-check-inline" bis_skin_checked="1">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="maleGender" value="option2">
                                    <label class="form-check-label" for="maleGender">Male</label>
                                </div>

                                <div class="form-check form-check-inline" bis_skin_checked="1">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="otherGender" value="option3">
                                    <label class="form-check-label" for="otherGender">Other</label>
                                </div>

                            </div>
                        </div>

                        <div class="row" bis_skin_checked="1">
                            <div class="col-md-6 mb-4 pb-2" bis_skin_checked="1">

                                <div data-mdb-input-init="" class="form-outline" data-mdb-input-initialized="true"
                                    bis_skin_checked="1">
                                    <label class="form-label" for="emailAddress" style="margin-left: 0px;">Email</label>
                                    <input type="email" id="emailAddress" class="form-control form-control-lg">
                                    <div class="form-notch" bis_skin_checked="1">
                                        <div class="form-notch-leading" style="width: 9px;" bis_skin_checked="1"></div>
                                        <div class="form-notch-middle" style="width: 40px;" bis_skin_checked="1"></div>
                                        <div class="form-notch-trailing" bis_skin_checked="1"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 mb-4 pb-2" bis_skin_checked="1">

                                <div data-mdb-input-init="" class="form-outline" data-mdb-input-initialized="true"
                                    bis_skin_checked="1">
                                    <label class="form-label" for="phoneNumber" style="margin-left: 0px;">Phone
                                        Number</label>
                                    <input type="tel" id="phoneNumber" class="form-control form-control-lg">
                                    <div class="form-notch" bis_skin_checked="1">
                                        <div class="form-notch-leading" style="width: 9px;" bis_skin_checked="1"></div>
                                        <div class="form-notch-middle" style="width: 92.8px;" bis_skin_checked="1">
                                        </div>
                                        <div class="form-notch-trailing" bis_skin_checked="1"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="mt-4 pt-2" bis_skin_checked="1">
                            <input class="btn btn-primary btn-lg" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>