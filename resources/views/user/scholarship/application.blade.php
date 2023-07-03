<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scholarship Application Form</title>
    <link rel="shortcut icon" href="{{ asset('Eziline/Scholarship Management System/public/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('Eziline/Scholarship Management System/public/plugins/global/plugins.bundle.css') }}"rel="stylesheet" type="text/css" />
    <link href="{{ asset('Eziline/Scholarship Management System/public/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @livewireStyles
</head>

<body>

    <div class="d-flex justify-content-between align-items-center shadow-sm" style="height: 80px; margin: 0 0 20px 0;">
        <div class="logo" style="width:20%;">
            <a href="{{route('home')}}">
                <img alt="Logo" onclick="return confirm('Are you sure you want to leave site? \nAll changes will be lost!')" src="{{ asset('Eziline/Scholarship Management System/public/logo.png') }}"
                class="logo-default h-75px h-lg-100px" style="padding-left: 30px; padding-bottom: 10px; padding-top: 6px;" />
            </a>
        </div>
        <div id="top" class="title" style="width:90%; margin-right:210px; text-align:center;">
            @foreach($scholarshipName as $key)
            <h1>Application Form for <i>{{$key->scholarship_name}}</i></h1>
            @endforeach
        </div>
    </div>

    {{-- Progress bar --}}
    
    {{-- @props(['multistepform'])
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="" aria-valuemin="0" aria-valuemax="100">{{$multistepform->getProgressValue()}}%</div>
    </div> --}}

    <div>
        {{-- Form starts here --}}

        {{-- action="{{route('application.save', $scholarshipId)}}" --}}
        {{-- <form class="form" method="POST" wire:submit.prevent="{{ route('application.submit', $scholarshipId) }}"> --}}
        {{-- <form class="form" method="POST" action="{{ route('application.submit', $scholarshipId) }}"> --}}
        {{-- <form class="form" wire:submit.prevent="submitForm({{$scholarshipId}})"> --}}
        {{-- <form class="form" wire:submit.prevent="submitForm"> --}}

            {{-- @csrf --}}
            
            {{-- Main form from multi-step-form file appears here --}}

            {{-- @livewire('multi-step-form') --}}

            {{-- To pass a value to the mount method of a Livewire component, you can include the value as a parameter when initializing the Livewire component in your view or when triggering the Livewire component's action. --}}
            @livewire('multi-step-form', ['scholarshipId' => $scholarshipId])

            {{-- <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="{{$progressValue}}" aria-valuemin="0" wire:model="progressValue" aria-valuemax="100">       
                    {{$progressValue}}%
                </div>
            </div> --}}

            {{-- <!--begin::Page loading(append to body)-->
            <div class="page-loader flex-column bg-dark bg-opacity-25">
                <span class="spinner-border text-primary" role="status"></span>
                <span class="text-gray-800 fs-6 fw-semibold mt-5">Loading...</span>
            </div>
            <!--end::Page loading--> --}}

            <!--begin::Scrolltop-->
            <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                <span class="svg-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                        <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Scrolltop-->


            @livewireScripts

            <!--begin::Global Javascript Bundle(mandatory for all pages)-->
            <script src="{{asset('Eziline/Scholarship Management System/public/plugins/global/plugins.bundle.js')}}"></script>
            <script src="{{asset('Eziline/Scholarship Management System/public/js/scripts.bundle.js')}}"></script>
            <!--end::Global Javascript Bundle-->


            <script>

                // Document evemt listener to move to top of screen whenever next button is pressed
                document.addEventListener('livewire:load', function () {
                    Livewire.on('scrollToTop', function () {
                        window.scrollTo(0, 0);
                    });
                });

                // listen for the show-alert event and display the JavaScript alert message
                document.addEventListener('livewire:load', function () {
                    Livewire.on('show-alert', function (data) {
                        alert(data.message);
                    });
                });
                
                
                // remove the application form url from back history and replace with the home url    
                /*
                // resolved from apply() method of livewire component
                document.addEventListener('livewire:load', function () {
                    Livewire.on('replaceUrl', function () {
                        // window.location.replace('http://localhost/Eziline/Scholarship%20Management%20System/public/home');
                        window.location.href = 'http://localhost/Eziline/Scholarship%20Management%20System/public/home';
                        return false;
                    });
                });
                */
                
                // the confirmAndIncreaseStep() method that will be called when the button is clicked. This method shows the confirm() dialog box and handles the if statement to prevent the wire:click event from triggering the increaseStep() function if the user clicks the cancel option.

                // If the user clicks the OK option, the if statement evaluates to true, and the increaseStep() function is called to perform the necessary action.
                // function confirmAndIncreaseStep() {
                //     if (confirm('Are you sure you want to submit form?')) {
                //         Livewire.emit('increaseStep');
                //     }
                // }

                // function confirmAndIncreaseStep() {
                //     if (confirm('Are you sure you want to submit form?')) {
                //         // Livewire.emitTo('multi-step-form', 'increaseStep');
                //         Livewire.emit('increaseStep');
                //     }

                //     return false;
                // }

                // document.getElementById('submitButton').addEventListener('click', function (event) {
                //     if (!confirm('Are you sure you want to submit the form?')) {
                //         event.preventDefault();
                //     }
                // });

                // document.getElementById('submitButton').addEventListener('click', function (event) {
                //     if (!confirm('Are you sure you want to submit the form?')) {
                //         // If confirmation is canceled, prevent Livewire action
                //         // event.stopPropagation();
                //         event.preventDefault();
                //     } 
                //     // else {
                //     //     event.preventDefault();
                //     // }
                // });



                // delete row from family-table form
                // function deleteRowFamilyMemberTable() {
                //     var index, table = document.getElementById("table-family");

                //     for (var i = 2; i < table.rows.length; i++) {
                //         table.rows[i].cells[4].onclick = function() {
                //             index = this.parentElement.rowIndex;
                //             table.deleteRow(index);
                //         };
                //     }
                // }

                // Change the total input field
                // function TotalAmount() {
                //     let total = 0;
                //     // let amount;
                //     $('.total').each(function(i, e) {
                //         // console.log($(this).val());
                //         let amount = $(this).val() - 0;
                //         // let amount = parseInt(document.getElementById('total').value);
                //         // console.log(amount);
                //         total += amount;
                //         // console.log(total);
                //     })

                //     // console.log(total);

                //     // $('.total_amount').html(total);
                //     $('.total_amount').val(total);

                //     // total = parseInt(total);

                //     // console.log(total);

                //     // document.getElementById('total_amount').innerHTML = total
                // }


                // prevent page from reloading (either on logo click, back or refresh)

                // window.onbeforeunload = function() {
                //         return "Data will be lost if you leave the page, are you sure?";
                //         };

                // // Store form data in an array
                // var formData1 = [];
                // var formData2 = [];
                // var formData3 = [];

                // // 
                // function saveFamilyMembersDataInTable() {

                //     // when first time button is clicked the array is empty so
                //     if (formData1.length == 0) {
                //         document.getElementById("data-table-1").deleteRow(0);
                //     }

                //     // Get form values
                //     var name = document.getElementById("applicant_family_members_name").value;
                //     var relation = document.getElementById("applicant_family_members_relation").value;
                //     var martialStatus = document.getElementById("applicant_family_members_martial_status").value;
                //     var remarks = document.getElementById("applicant_family_members_remarks").value;

                //     // Add values to formData array
                //     formData1.push([name, relation, martialStatus, remarks]);

                //     // Display data in table
                //     var table = document.getElementById("data-table-1");

                //     var row = table.insertRow();

                //     var nameCell = row.insertCell(0);
                //     var relationCell = row.insertCell(1);
                //     var martialStatusCell = row.insertCell(2);
                //     var remarksCell = row.insertCell(3);

                //     nameCell.innerHTML = name;
                //     relationCell.innerHTML = relation;
                //     martialStatusCell.innerHTML = martialStatus;
                //     remarksCell.innerHTML = remarks;

                //     document.getElementById("applicant_family_members_name").value = "";
                //     document.getElementById("applicant_family_members_relation").value = "";
                //     document.getElementById("applicant_family_members_martial_status").value = "";
                //     document.getElementById("applicant_family_members_remarks").value = "";
                // }

                // //
                // function saveFamilyMembersEarningDataInTable() {
                //     // when first time button is clicked the array is empty so
                //     // if(formData2.length==0){
                //     //     document.getElementById("data-table-2").deleteRow(2);
                //     // }

                //     // Get form values
                //     var name = document.getElementById("applicant_family_member_earnings_member_name").value;
                //     var relation = document.getElementById("applicant_family_member_earnings_member_relation").value;
                //     var occupation = document.getElementById("applicant_family_member_earnings_member_occupation").value;
                //     var organization = document.getElementById("applicant_family_member_earnings_member_organization").value;
                //     var designation = document.getElementById("applicant_family_member_earnings_member_designation").value;
                //     var income = document.getElementById("applicant_family_member_earnings_member_monthly_income").value;
                //     var remarks = document.getElementById("applicant_family_member_earnings_member_remarks").value;

                //     // Add values to formData array
                //     formData1.push([name, relation, occupation, organization, designation, income, remarks]);

                //     // Display data in table
                //     var table = document.getElementById("data-table-2");

                //     var row = table.insertRow();

                //     var nameCell = row.insertCell(0);
                //     var relationCell = row.insertCell(1);
                //     var occupationCell = row.insertCell(2);
                //     var organizationCell = row.insertCell(3);
                //     var designationCell = row.insertCell(4);
                //     var incomeCell = row.insertCell(5);
                //     var remarksCell = row.insertCell(6);

                //     nameCell.innerHTML = name;
                //     relationCell.innerHTML = relation;
                //     occupationCell.innerHTML = occupation;
                //     organizationCell.innerHTML = organization;
                //     designationCell.innerHTML = designation;
                //     incomeCell.innerHTML = income;
                //     remarksCell.innerHTML = remarks;

                //     document.getElementById("applicant_family_member_earnings_member_name").value = "";
                //     document.getElementById("applicant_family_member_earnings_member_relation").value = "";
                //     document.getElementById("applicant_family_member_earnings_member_occupation").value = "";
                //     document.getElementById("applicant_family_member_earnings_member_organization").value = "";
                //     document.getElementById("applicant_family_member_earnings_member_designation").value = "";
                //     document.getElementById("applicant_family_member_earnings_member_monthly_income").value = "";
                //     document.getElementById("applicant_family_member_earnings_member_remarks").value = "";
                // }

                // //
                // function saveFamilyMembersEarningDataInTable() {
                //     // when first time button is clicked the array is empty so
                //     // if(formData2.length==0){
                //     //     document.getElementById("data-table-2").deleteRow(2);
                //     // }

                //     // Get form values
                //     var name = document.getElementById("applicant_family_member_earnings_member_name").value;
                //     var relation = document.getElementById("applicant_family_member_earnings_member_relation").value;
                //     var occupation = document.getElementById("applicant_family_member_earnings_member_occupation").value;
                //     var organization = document.getElementById("applicant_family_member_earnings_member_organization").value;
                //     var designation = document.getElementById("applicant_family_member_earnings_member_designation").value;
                //     var income = document.getElementById("applicant_family_member_earnings_member_monthly_income").value;
                //     var remarks = document.getElementById("applicant_family_member_earnings_member_remarks").value;

                //     // Add values to formData array
                //     formData1.push([name, relation, occupation, organization, designation, income, remarks]);

                //     // Display data in table
                //     var table = document.getElementById("data-table-2");

                //     var row = table.insertRow();

                //     var nameCell = row.insertCell(0);
                //     var relationCell = row.insertCell(1);
                //     var occupationCell = row.insertCell(2);
                //     var organizationCell = row.insertCell(3);
                //     var designationCell = row.insertCell(4);
                //     var incomeCell = row.insertCell(5);
                //     var remarksCell = row.insertCell(6);

                //     nameCell.innerHTML = name;
                //     relationCell.innerHTML = relation;
                //     occupationCell.innerHTML = occupation;
                //     organizationCell.innerHTML = organization;
                //     designationCell.innerHTML = designation;
                //     incomeCell.innerHTML = income;
                //     remarksCell.innerHTML = remarks;

                //     // change the total income
                //     var totalIncome = document.getElementById("total_income_data_table_2").innerHTML;

                //     totalIncome = Number(totalIncome) + Number(income);

                //     document.getElementById("total_income_data_table_2").innerHTML = totalIncome;


                //     // clear all fields
                //     document.getElementById("applicant_family_member_earnings_member_name").value = "";
                //     document.getElementById("applicant_family_member_earnings_member_relation").value = "";
                //     document.getElementById("applicant_family_member_earnings_member_occupation").value = "";
                //     document.getElementById("applicant_family_member_earnings_member_organization").value = "";
                //     document.getElementById("applicant_family_member_earnings_member_designation").value = "";
                //     document.getElementById("applicant_family_member_earnings_member_monthly_income").value = "";
                //     document.getElementById("applicant_family_member_earnings_member_remarks").value = "";
                // }

                // //
                // function saveSiblingDataInTable() {

                //     // Get form values
                //     var name = document.getElementById("applicant_siblings_name").value;
                //     var relation = document.getElementById("applicant_siblings_relation").value;
                //     var institution = document.getElementById("applicant_siblings_institution_name").value;
                //     var fpm = document.getElementById("applicant_siblings_fees_per_month").value;

                //     // Add values to formData array
                //     formData1.push([name, relation, institution, fpm]);

                //     // Display data in table
                //     var table = document.getElementById("data-table-3");

                //     var row = table.insertRow();

                //     var nameCell = row.insertCell(0);
                //     var relationCell = row.insertCell(1);
                //     var institutionCell = row.insertCell(2);
                //     var fpmCell = row.insertCell(3);

                //     nameCell.innerHTML = name;
                //     relationCell.innerHTML = relation;
                //     institutionCell.innerHTML = institution;
                //     fpmCell.innerHTML = fpm;

                //     // change the total fee
                //     var totalFee = document.getElementById("total_fee_data_table_3").innerHTML;

                //     totalFee = Number(totalFee) + Number(fpm);

                //     document.getElementById("total_fee_data_table_3").innerHTML = totalFee;


                //     // clear all fields
                //     document.getElementById("applicant_siblings_name").value = "";
                //     document.getElementById("applicant_siblings_relation").value = "";
                //     document.getElementById("applicant_siblings_institution_name").value = "";
                //     document.getElementById("applicant_siblings_fees_per_month").value = "";
                // }

                // //
                // function saveFamilyIncomeDataInTable() {

                //     // Get form values
                //     var name = document.getElementById("applicant_family_monthly_incomes_member_name").value;
                //     var relation = document.getElementById("applicant_family_monthly_incomes_member_relation").value;
                //     var assetIncome = document.getElementById("applicant_family_monthly_incomes_member_monthly_asset_income").value;
                //     var grossIncome = document.getElementById("applicant_family_monthly_incomes_member_monthly_gross_income").value;
                //     var netIncome = document.getElementById("applicant_family_monthly_incomes_member_monthly_net_income").value;

                //     if (!(name.length == 0 || relation.length == 0 || assetIncome.length == 0 || grossIncome.length == 0 ||
                //             netIncome.length == 0)) {
                //         // Add values to formData array
                //         formData1.push([name, relation, assetIncome, grossIncome, netIncome]);

                //         // Display data in table
                //         var table = document.getElementById("data-table-4");

                //         var row = table.insertRow();

                //         var nameCell = row.insertCell(0);
                //         var relationCell = row.insertCell(1);
                //         var assetIncomeCell = row.insertCell(2);
                //         var grossIncomeCell = row.insertCell(3);
                //         var netIncomeCell = row.insertCell(4);
                //         var annualIncomeCell = row.insertCell(5);

                //         nameCell.innerHTML = name;
                //         relationCell.innerHTML = relation;
                //         assetIncomeCell.innerHTML = assetIncome;
                //         grossIncomeCell.innerHTML = grossIncome;
                //         netIncomeCell.innerHTML = netIncome;
                //         annualIncomeCell.innerHTML = Number(assetIncome) + Number(grossIncome) + Number(netIncome);

                //         // change the total income
                //         var totalIncome = document.getElementById("total_income_data_table_4").innerHTML;

                //         totalIncome = Number(totalIncome) + Number(annualIncomeCell.innerHTML);

                //         document.getElementById("total_income_data_table_4").innerHTML = totalIncome;


                //         // clear all fields
                //         document.getElementById("applicant_family_monthly_incomes_member_name").value = "";
                //         document.getElementById("applicant_family_monthly_incomes_member_relation").value = "";
                //         document.getElementById("applicant_family_monthly_incomes_member_monthly_asset_income").value = "";
                //         document.getElementById("applicant_family_monthly_incomes_member_monthly_gross_income").value = "";
                //         document.getElementById("applicant_family_monthly_incomes_member_monthly_net_income").value = "";

                //     }

                // }


                // //
                // function saveAssetIncomeDataInTable() {

                //     // Get form values
                //     var type = document.getElementById("applicant_asset_monthly_incomes_type").value;
                //     var father = document.getElementById("applicant_asset_monthly_incomes_to_father").value;
                //     var mother = document.getElementById("applicant_asset_monthly_incomes_to_mother").value;
                //     var spouse = document.getElementById("applicant_asset_monthly_incomes_to_spouse").value;
                //     var self = document.getElementById("applicant_asset_monthly_incomes_to_self").value;
                //     var other = document.getElementById("applicant_asset_monthly_incomes_to_other").value;

                //     if (!(type.length == 0 || father.length == 0 || mother.length == 0 || spouse.length == 0 || self.length == 0 ||
                //             other.length == 0)) {
                //         // Add values to formData array
                //         // formData1.push([name, relation, assetIncome, grossIncome,netIncome]);

                //         // Display data in table
                //         var table = document.getElementById("data-table-5");

                //         var row = table.insertRow();

                //         var typeCell = row.insertCell(0);
                //         var fatherCell = row.insertCell(1);
                //         var motherCell = row.insertCell(2);
                //         var spouseCell = row.insertCell(3);
                //         var selfCell = row.insertCell(4);
                //         var otherCell = row.insertCell(5);
                //         var totalCell = row.insertCell(6);

                //         typeCell.innerHTML = type;
                //         fatherCell.innerHTML = father;
                //         motherCell.innerHTML = mother;
                //         spouseCell.innerHTML = spouse;
                //         selfCell.innerHTML = self;
                //         otherCell.innerHTML = other;

                //         totalCell.innerHTML = Number(father) + Number(mother) + Number(spouse) + Number(self) + Number(other);

                //         // change the total income
                //         var totalIncome = document.getElementById("total_income_data_table_5").innerHTML;

                //         totalIncome = Number(totalIncome) + Number(totalCell.innerHTML);

                //         document.getElementById("total_income_data_table_5").innerHTML = totalIncome;


                //         // clear all fields
                //         document.getElementById("applicant_asset_monthly_incomes_type").value = "";
                //         document.getElementById("applicant_asset_monthly_incomes_to_father").value = "";
                //         document.getElementById("applicant_asset_monthly_incomes_to_mother").value = "";
                //         document.getElementById("applicant_asset_monthly_incomes_to_spouse").value = "";
                //         document.getElementById("applicant_asset_monthly_incomes_to_self").value = "";
                //         document.getElementById("applicant_asset_monthly_incomes_to_other").value = "";

                //     }

                // }


                // //
                // function saveTransportDataInTable() {

                //     // Get form values
                //     var type = document.getElementById("applicant_other_assets_transport_type").value;
                //     var model = document.getElementById("applicant_other_assets_model_no").value;
                //     var engine = document.getElementById("applicant_other_assets_engine_capacity").value;
                //     var reg = document.getElementById("applicant_other_assets_reg_no").value;
                //     var ownership = document.getElementById("applicant_other_assets_ownership_period").value;

                //     if (!(type.length == 0 || model.length == 0 || engine.length == 0 || reg.length == 0 || ownership.length ==
                //         0)) {
                //         // Add values to formData array
                //         // formData1.push([name, relation, assetIncome, grossIncome,netIncome]);

                //         // Display data in table
                //         var table = document.getElementById("data-table-6");

                //         var row = table.insertRow();

                //         var typeCell = row.insertCell(0);
                //         var modelCell = row.insertCell(1);
                //         var engineCell = row.insertCell(2);
                //         var regCell = row.insertCell(3);
                //         var ownershipCell = row.insertCell(4);

                //         typeCell.innerHTML = type;
                //         modelCell.innerHTML = model;
                //         engineCell.innerHTML = engine;
                //         regCell.innerHTML = reg;
                //         ownershipCell.innerHTML = ownership;


                //         // clear all fields
                //         document.getElementById("applicant_other_assets_transport_type").value = "";
                //         document.getElementById("applicant_other_assets_model_no").value = "";
                //         document.getElementById("applicant_other_assets_engine_capacity").value = "";
                //         document.getElementById("applicant_other_assets_reg_no").value = "";
                //         document.getElementById("applicant_other_assets_ownership_period").value = "";

                //     }

                // }


                // //
                // function saveLandDataInTable() {

                //     // Get form values
                //     var type = document.getElementById("applicant_owned_plots_asset_type").value;
                //     var qty = document.getElementById("applicant_owned_plots_quantity").value;
                //     var size = document.getElementById("applicant_owned_plots_size").value;
                //     var loc = document.getElementById("applicant_owned_plots_location").value;
                //     var cultivable = document.getElementById("applicant_owned_plots_cultivable_area").value;
                //     var agricultural = document.getElementById("applicant_owned_plots_agricultural").value;

                //     if (!(type.length == 0 || qty.length == 0 || size.length == 0 || loc.length == 0 || cultivable.length == 0 ||
                //             agricultural.length == 0)) {
                //         // Add values to formData array
                //         // formData1.push([name, relation, assetIncome, grossIncome,netIncome]);

                //         // Display data in table
                //         var table = document.getElementById("data-table-7");

                //         var row = table.insertRow();

                //         var typeCell = row.insertCell(0);
                //         var qtyCell = row.insertCell(1);
                //         var sizeCell = row.insertCell(2);
                //         var locCell = row.insertCell(3);
                //         var cultivableCell = row.insertCell(4);
                //         var agriculturalCell = row.insertCell(5);

                //         typeCell.innerHTML = type;
                //         qtyCell.innerHTML = qty;
                //         sizeCell.innerHTML = size;
                //         locCell.innerHTML = loc;
                //         cultivableCell.innerHTML = cultivable;
                //         agriculturalCell.innerHTML = agricultural;


                //         // clear all fields
                //         document.getElementById("applicant_owned_plots_asset_type").value = "";
                //         document.getElementById("applicant_owned_plots_quantity").value = "";
                //         document.getElementById("applicant_owned_plots_size").value = "";
                //         document.getElementById("applicant_owned_plots_location").value = "";
                //         document.getElementById("applicant_owned_plots_cultivable_area").value = "";
                //         document.getElementById("applicant_owned_plots_agricultural").value = "";

                //     }

                // }

                // //
                // function saveAssetWorthDataInTable() {

                //     // Get form values
                //     var type = document.getElementById("applicant_worth_assets_asset_title").value;
                //     var father = document.getElementById("applicant_worth_assets_to_father").value;
                //     var mother = document.getElementById("applicant_worth_assets_to_mother").value;
                //     var spouse = document.getElementById("applicant_worth_assets_to_spouse").value;
                //     var guardian = document.getElementById("applicant_worth_assets_to_guardian").value;

                //     if (!(type.length == 0 || father.length == 0 || mother.length == 0 || spouse.length == 0 || guardian.length ==
                //             0)) {
                //         // Add values to formData array
                //         // formData1.push([name, relation, assetIncome, grossIncome,netIncome]);

                //         // Display data in table
                //         var table = document.getElementById("data-table-8");

                //         var row = table.insertRow();

                //         var typeCell = row.insertCell(0);
                //         var fatherCell = row.insertCell(1);
                //         var motherCell = row.insertCell(2);
                //         var spouseCell = row.insertCell(3);
                //         var guardianCell = row.insertCell(4);
                //         var totalCell = row.insertCell(5);

                //         typeCell.innerHTML = type;
                //         fatherCell.innerHTML = father;
                //         motherCell.innerHTML = mother;
                //         spouseCell.innerHTML = spouse;
                //         guardianCell.innerHTML = guardian;

                //         totalCell.innerHTML = Number(father) + Number(mother) + Number(spouse) + Number(guardian)

                //         // change the total income
                //         var totalIncome = document.getElementById("total_income_data_table_8").innerHTML;

                //         totalIncome = Number(totalIncome) + Number(totalCell.innerHTML);

                //         document.getElementById("total_income_data_table_8").innerHTML = totalIncome;


                //         // clear all fields
                //         document.getElementById("applicant_worth_assets_asset_title").value = "";
                //         document.getElementById("applicant_worth_assets_to_father").value = "";
                //         document.getElementById("applicant_worth_assets_to_mother").value = "";
                //         document.getElementById("applicant_worth_assets_to_spouse").value = "";
                //         document.getElementById("applicant_worth_assets_to_guardian").value = "";

                //     }

                // }

                // //
                // function saveEducationDataInTable() {

                //     // Get form values
                //     var level = document.getElementById("applicant_education_records_level_of_study").value;
                //     var name = document.getElementById("applicant_education_records_institution_name").value;
                //     var fpm = document.getElementById("applicant_education_records_per_month_fees").value;
                //     var from = document.getElementById("applicant_education_records_from_date").value;
                //     var to = document.getElementById("applicant_education_records_to_date").value;
                //     var gpa = document.getElementById("applicant_education_records_gpa_division").value;
                //     var cgpa = document.getElementById("applicant_education_records_cgpa_percentage").value;

                //     if (!(level.length == 0 || name.length == 0 || fpm.length == 0 || from.length == 0 || to.length == 0 ||
                //     gpa.length == 0 || cgpa.length==0)) {
                //         // Add values to formData array
                //         // formData1.push([name, relation, assetIncome, grossIncome,netIncome]);

                //         // Display data in table
                //         var table = document.getElementById("data-table-9");

                //         var row = table.insertRow();

                //         var levelCell = row.insertCell(0);
                //         var nameCell = row.insertCell(1);
                //         var fpmCell = row.insertCell(2);
                //         var toCell = row.insertCell(3);
                //         var fromCell = row.insertCell(4);
                //         var gpaCell = row.insertCell(5);
                //         var cgpaCell = row.insertCell(6);

                //         levelCell.innerHTML = level;
                //         nameCell.innerHTML = name;
                //         fpmCell.innerHTML = fpm;
                //         fromCell.innerHTML = from;
                //         toCell.innerHTML = to;
                //         gpaCell.innerHTML = gpa;
                //         cgpaCell.innerHTML = cgpa;


                //         // clear all fields
                //         document.getElementById("applicant_education_records_level_of_study").value = "";
                //         document.getElementById("applicant_education_records_institution_name").value = "";
                //         document.getElementById("applicant_education_records_per_month_fees").value = "";
                //         document.getElementById("applicant_education_records_from_date").value = "";
                //         document.getElementById("applicant_education_records_to_date").value = "";
                //         document.getElementById("applicant_education_records_gpa_division").value = "";
                //         document.getElementById("applicant_education_records_cgpa_percentage").value = "";

                //     }

                // }


                // New form fields for Family members information form
                // $(document).ready(function(){
                //     alert('hello');
                // })
            </script>
</body>

</html>
