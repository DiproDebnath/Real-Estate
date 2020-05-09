@extends('layouts.frontend')

@section('mainContent')
    <main class="content-offset-to-top">
        <div class="header-image-wrapper">
            <div class="bg"
                 style="background-image: url('{{asset('frontend/assets/images/others/about.jpg')}}');"></div>
            <div class="mask"></div>
            <div class="header-image-content offset-bottom">
                <h1 class="title">Loan Calculator</h1>

            </div>
        </div>
        <div class="px-3">
            <div class="theme-container">
                <div class="mdc-card main-content-header pt-0">
                    <div class="section pt-0">
                        <div class="px-3">
                            <div class="theme-container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6  p-2" style="margin: auto">
                                        <div class="widget">
                                            <div class="widget-title bg-primary">Mortgage Calculator</div>
                                            <form action="javascript:void(0);" >
                                                <div
                                                    class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                                    <input class="mdc-text-field__input" placeholder="$" id="principal">
                                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label class="mdc-floating-label" style="">Principal
                                                                Amount</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                                    <input class="mdc-text-field__input" placeholder="$" id="downpayment">
                                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label class="mdc-floating-label" style="">Down
                                                                Payment</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                                    <input class="mdc-text-field__input" placeholder="%" id="apr">
                                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label class="mdc-floating-label" style="">Interest
                                                                Rate</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                                    <input class="mdc-text-field__input" placeholder="Number of Years" id="years">
                                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label class="mdc-floating-label" style="">Period</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2 mdc-text-field--focused">
                                                    <input class="mdc-text-field__input" disabled id="payment">
                                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded mdc-notched-outline--notched">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label class="mdc-floating-label mdc-floating-label--float-above" style="">Monthly Payment</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2 mdc-text-field--focused">
                                                    <input class="mdc-text-field__input" disabled id="total">
                                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded mdc-notched-outline--notched">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label class="mdc-floating-label mdc-floating-label--float-above" style="">Total
                                                                Payment</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2 mdc-text-field--focused">
                                                    <input class="mdc-text-field__input" disabled id="totalinterest">
                                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded mdc-notched-outline--notched">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label class="mdc-floating-label mdc-floating-label--float-above" style="">Total Interest
                                                                </label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>

                                                <div class="row around-xs middle-xs p-2 mb-3">
                                                    <button
                                                        class="mdc-button mdc-button--raised bg-accent mdc-ripple-upgraded"
                                                        type="submit" onclick="calculate()">
                                                        <span class="mdc-button__ripple"></span>
                                                        <span class="mdc-button__label">Calculate Mortgage</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
@section('javascripts')
    <script>
        function calculate() {

            //Look up the input and output elements in the document
            var principals = document.getElementById("principal");
            var downpayment = document.getElementById("downpayment");
            var amount = principals.value - downpayment.value;

            var apr = document.getElementById("apr");
            var years = document.getElementById("years");
            var payment = document.getElementById("payment");
            var total = document.getElementById("total");
            var totalinterest = document.getElementById("totalinterest");

// Get the user's input from the input elements.
// Convert interest from a percentage to a decimal, and convert from
// an annual rate to a monthly rate. Convert payment period in years
// to the number of monthly payments.
            var principal = parseFloat(amount);
            var interest = parseFloat(apr.value) / 100 / 12;
            var payments = parseFloat(years.value) * 12;

// compute the monthly payment figure
            var x = Math.pow(1 + interest, payments); //Math.pow computes powers
            var monthly = (principal*x*interest)/(x-1);
            console.log(principal, interest, payments);
// If the result is a finite number, the user's input was good and
// we have meaningful results to display
            if (isFinite(monthly)){
                // Fill in the output fields, rounding to 2 decimal places
                payment.value = monthly.toFixed(2);
                total.value = (monthly * payments).toFixed(2);
                totalinterest.value = ((monthly*payments)-principal).toFixed(2);

// Save the user's input so we can restore it the next time they visit
                save(amount, apr.value, years.value);


            }
            else {
                // Result was Not-a-Number or infinite, which means the input was
                // incomplete or invalid. Clear any previously displayed output.
                payment.value = ""; // Erase the content of these elements
                total.value = ""
                totalinterest.value = "";

            }
        }
        // Save the user's input as properties of the localStorage object. Those
        // properties will still be there when the user visits in the future
        // This storage feature will not work in some browsers (Firefox, e.g.) if you
        // run the example from a local file:// URL. It does work over HTTP, however.
        function save(amount, apr, years) {
            if (window.localStorage) { // Only do this if the browser supports it
                localStorage.loan_amount = amount;
                localStorage.loan_apr = apr;
                localStorage.loan_years = years;

            }
        }
        // Automatically attempt to restore input fields when the document first loads.
        window.onload = function() {
            // If the browser supports localStorage and we have some stored data
            if (window.localStorage && localStorage.loan_amount) {
                document.getElementById("amount").value = localStorage.loan_amount;
                document.getElementById("apr").value = localStorage.loan_apr;
                document.getElementById("years").value = localStorage.loan_years;
            }
        };
        // Pass the user's input to a server-side script which can (in theory) return
        // a list of links to local lenders interested in making loans. This example
        // does not actually include a working implementation of such a lender-finding
        // service. But if the service existed, this function would work with it.

        // Chart monthly loan balance, interest and equity in an HTML <canvas> element.
        // If called with no arguments then just erase any previously drawn chart.



    </script>
    @endsection
