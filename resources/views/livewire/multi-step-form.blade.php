{{-- STEP 1 --}}
@if ($currentStep == 1)
{{-- <input type="hidden" name="scholarshipId" wire:model="scholarshipId"> --}}

    {{-- card start --}}
    <div class="card shadow-sm  mb-15" style="width:85%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
                1. Student Information
            </h3>
            {{-- <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-light">
                    Skip & Continue
                </button>
            </div> --}}
        </div>
        <div class="card-body">
            <div class="card">

                <div class="card-body">
                    <h4 class="font-size-lg text-dark font-weight-bold mb-20">Please fill in your personal
                        details completely and correctly to the best of your knowledge!</h4>

                    <div class="mb-15">
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">University Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" wire:model="applicant_uni"
                                    placeholder="Lahore University of Management & Sciences" />
                                <span class="text-danger">
                                    @error('applicant_uni')
                                    {{ str_replace("applicant uni", 'university', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Degree title/Program</label>
                            <div class="col-lg-6">
                                <select wire:model="applicant_degree" id="" class="form-control" >
                                    <option value="">Select Degree</option>
                                    {{-- <option value="Computer Science">Computer Science</option>
                                    <option value="International Relations">International Relations</option>
                                    <option value="Business Management System">Business Management System
                                    </option>
                                    <option value="Environmental Science">Environmental Science</option>
                                    <option value="Behaviour Science">Behaviour Science</option>
                                    <option value="Mathematical Science">Mathematical Science</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Media & Communication">Media & Communication</option> --}}
                                    <option value="Medical Sciences">
                                        Medical Sciences
                                    </option>
                                    <option value="Engineering">
                                        Engineering
                                    </option>
                                    <option value="Technical">
                                        Technical
                                    </option>
                                    <option value="Computer Sciences & Information Technology">
                                        Computer Sciences & Information Technology
                                    </option>
                                    <option value="Art & Design">
                                        Art & Design
                                    </option>
                                    <option value="Management Sciences">
                                        Management Sciences
                                    </option>
                                    <option value="Social Sciences">
                                        Social Sciences
                                    </option>
                                    <option value="Biological & Life Sciences">
                                        Biological & Life Sciences
                                    </option>
                                    <option value="Chemical & Material Sciences">
                                        Chemical & Material Sciences
                                    </option>
                                    <option value="Physics & Numerical Sciences">
                                        Physics & Numerical Sciences
                                    </option>
                                    <option value="Earth & Environmental Sciences">
                                        Earth & Environmental Sciences
                                    </option>
                                    <option value="Agricultural Sciences">
                                        Agricultural Sciences
                                    </option>
                                    <option value="Religious Studies">
                                        Religious Studies
                                    </option>
                                    <option value="Media Studies">
                                        Media Studies
                                    </option>
                                    <option value="Commerce / Finance & Accounting">
                                        Commerce / Finance & Accounting
                                    </option>
                                </select>
                                <span class="text-danger">
                                    @error('applicant_degree')
                                        {{ str_replace("applicant degree", 'degree', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Registration No</label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_reg_no" class="form-control" placeholder=""
                                     />
                                <span class="text-danger">
                                    @error('applicant_reg_no')
                                        {{ str_replace("applicant reg no", 'registration number', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Student Name</label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_name" class="form-control" placeholder=""
                                     />
                                <span class="text-danger">
                                    @error('applicant_name')
                                        {{ str_replace("applicant name", 'name', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Semester</label>
                            <div class="col-lg-6">
                                <select wire:model="applicant_semester" id="" class="form-control" >
                                    <option value="">Select Semester</option>
                                    <option value="First Semester">First Semester</option>
                                    <option value="Second Semester">Second Semester</option>
                                    <option value="Third Semester">Third Semester</option>
                                    <option value="Fourth Semester">Fourth Semester</option>
                                    <option value="Fifth Semester">Fifth Semester</option>
                                    <option value="Sixth Semester">Sixth Semester</option>
                                    <option value="Seventh Semester">Seventh Semester</option>
                                    <option value="Eight Semester">Eight Semester</option>
                                </select>
                                <span class="text-danger">
                                    @error('applicant_semester')
                                        {{ str_replace("applicant semester", 'semester', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">CGPA</label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_cgpa" class="form-control" placeholder="3.1"
                                     />
                                <span class="text-danger">
                                    @error('applicant_cgpa')
                                        {{ str_replace("applicant cgpa", 'CGPA', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Gender</label>
                            <div class="col-lg-6">
                                <select wire:model="applicant_gender" id="" class="form-control" >
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                <span class="text-danger">
                                    @error('applicant_gender')
                                        {{ str_replace("applicant gender", 'gender', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Date of birth</label>
                            <div class="col-lg-6">
                                <input type="date" max="{{ date('Y-m-d') }}" wire:model="applicant_dob"
                                    class="form-control"  />
                                <span class="text-danger">
                                    @error('applicant_dob')
                                        {{ str_replace("applicant dob", 'date of birth', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">CNIC</label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_cnic" class="form-control"
                                    placeholder="xxxxx-xxxxxxx-x"  />
                                <span class="text-danger">
                                    @error('applicant_cnic')
                                        {{ str_replace("applicant cnic", 'CNIC', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Martial Status</label>
                            <div class="col-lg-6">
                                <select wire:model="applicant_martial_status" id="" class="form-control"
                                    >
                                    <option value="">Select Martial Status</option>
                                    <option value="Male">Single</option>
                                    <option value="Female">Married</option>
                                </select>
                                <span class="text-danger">
                                    @error('applicant_martial_status')
                                        {{ str_replace("applicant martial status", 'marital status', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Age</label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_age" class="form-control"
                                    placeholder="19"  />
                                <span class="text-danger">
                                    @error('applicant_age')
                                        {{ str_replace("applicant age", 'age', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Domicile</label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_domicile" class="form-control"
                                    placeholder="Lahore"  />
                                <span class="text-danger">
                                    @error('applicant_domicile')
                                        {{ str_replace("applicant domicile", 'domicile', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Present Address</label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_present_address" class="form-control"
                                     />
                                <span class="text-danger">
                                    @error('applicant_present_address')
                                        {{ str_replace("applicant present address", 'present address', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Permanant Address</label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_permanant_address" class="form-control"
                                     />
                                <span class="text-danger">
                                    @error('applicant_permanant_address')
                                        {{ str_replace("applicant permanant address", 'permanant address', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endif

@if ($currentStep == 2)
{{-- <input type="hidden" name="scholarshipId" wire:model="scholarshipId"> --}}

    {{-- STEP 2 --}}
    {{-- card start --}}
    <div class="card shadow-sm  mb-15" style="width:85%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
                2. Current Employment Information
            </h3>
            @if(empty($applicant_employment_designation) && empty($applicant_employment_company_name) && empty($applicant_employment_gross_income) && empty($applicant_employment_monthly_income) && empty($applicant_employment_telephone_number) && empty($applicant_employment_email))
            <div class="card-toolbar">
                <a wire:click="skipStep()" class="btn btn-sm btn-light">
                    Skip & Continue
                </a>
            </div>
            @endif
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <h4 class="font-size-lg text-dark font-weight-bold mb-20">Are you currently working? If yes
                        then fill this form otherwise skip & continue!</h4>

                    <div class="mb-15">
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Designation</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control"
                                    wire:model="applicant_employment_designation" />
                                <span class="text-danger">
                                    @error('applicant_employment_designation')
                                        {{ str_replace("applicant employment designation", 'designation', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Name of Company/Organization</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control"
                                    wire:model="applicant_employment_company_name" />
                                <span class="text-danger">
                                    @error('applicant_employment_company_name')
                                        {{ str_replace("applicant employment company name", 'company name', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Total Monthly Gross Income in PKR</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control"
                                    wire:model="applicant_employment_gross_income" />
                                <span class="text-danger">
                                    @error('applicant_employment_gross_income')
                                        {{ str_replace("applicant employment gross income", 'gross income', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Total Monthly Income in PKR</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control"
                                    wire:model="applicant_employment_monthly_income" />
                                <span class="text-danger">
                                    @error('applicant_employment_monthly_income')
                                        {{ str_replace("applicant employment monthly income", 'monthly income', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Telephone No</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control"
                                    wire:model="applicant_employment_telephone_number"/>
                                <span class="text-danger">
                                    @error('applicant_employment_telephone_number')
                                        {{ str_replace("applicant employment telephone number", 'telephone number', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Email</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" wire:model="applicant_employment_email" />
                                <span class="text-danger">
                                    @error('applicant_employment_email')
                                        {{ str_replace("applicant employment email", 'email', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endif

@if ($currentStep == 3)
{{-- <input type="hidden" name="scholarshipId" wire:model="scholarshipId"> --}}

    {{-- STEP 3 --}}
    {{-- card start --}}
    <div class="card shadow-sm  mb-15" style="width:85%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
                3. Family Members Information
            </h3>
            {{-- <div class="card-toolbar">
                <a href="{{route('application.showFamilyMemberDetailsForm', $scholarship)}}"class="btn btn-sm btn-light">
                    Skip & Continue
                </a>
            </div> --}}
            {{-- If there is no record entered in form and next is pressed then this will be shown avlue setted from increaseStep function --}}
            @if (session()->has('alert'))
                <div class="alert alert-danger" style="height: 50px!important; margin-top: 10px;">
                    <p>
                        {{ session('alert') }}
                    </p>
                </div>
            @endif

        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">

                    <div class="mb-15">
                        <div class="table-responsive">

                            <table class="table" id="table-family">
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th>
                                            <div class="form-group mb-10">
                                                <label class="form-label">S#</label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-group mb-10">
                                                <label class="form-label">Family member name</label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-group mb-10">
                                                <label class="form-label">Relation with applicant</label>
                                            </div>
                                        </th>
                                        <th style="width: 22%">
                                            <div class="form-group mb-10">
                                                <label class="form-label">Marital status</label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-group mb-10">
                                                <label class="form-label">Remarks***</label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-group mb-10">
                                                <a href="#!" title="Add"
                                                    class="btn btn-sm btn-success add_more_family_details font-weight-bold"
                                                    style="    padding: 9px 13px 10px!important;
                                                        border-radius: 50%;
                                                        width: 38px;"
                                                    wire:click="addFamilyMember()"><i
                                                        class="fa-regular fa-plus"></i></a>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="familyDetails">
                                    @foreach ($applicant_family_members as $array)
                                        <tr>
                                            <td>
                                                <div class="form-group mt-5">
                                                    <h5>{{ $loop->index + 1 }}.</h5>
                                                </div>

                                            </td>
                                            <td>
                                                <div class="form-group mb-10">
                                                    <input type="text"
                                                        class="form-control @error('applicant_family_members.' . $loop->index . '.name') @enderror"
                                                        wire:model="applicant_family_members.{{ $loop->index }}.name"
                                                        wire:key="family-member-name-{{ $loop->index }}" />
                                                    <span class="text-danger">
                                                        @error('applicant_family_members.' . $loop->index . '.name')
                                                            {{ str_replace("applicant family members.{$loop->index}.name field", 'family member name', $message) }}
                                                        @enderror
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <div class="form-group mb-10">
                                                    <input type="text" class="form-control"
                                                        wire:model="applicant_family_members.{{ $loop->index }}.relation"
                                                        wire:key="family-member-relation-{{ $loop->index }}" />
                                                    <span class="text-danger">
                                                        @error('applicant_family_members.' . $loop->index . '.relation')
                                                            {{ str_replace("applicant family members.{$loop->index}.relation field", 'family member relation', $message) }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group mb-10">
                                                    <select
                                                        wire:model="applicant_family_members.{{ $loop->index }}.status"
                                                        wire:key="family-member-status-{{ $loop->index }}"
                                                        class="form-control" >
                                                        <option value="">Select marital status</option>
                                                        <option value="Single">Single</option>
                                                        <option value="Married">Married</option>
                                                    </select>
                                                    <span class="text-danger">
                                                        @error('applicant_family_members.' . $loop->index . '.status')
                                                            {{ str_replace("applicant family members.{$loop->index}.status field", 'family member status', $message) }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group mb-10">
                                                    <input type="text" class="form-control"
                                                        wire:model="applicant_family_members.{{ $loop->index }}.remarks"
                                                        wire:key="family-member-remarks-{{ $loop->index }}" />
                                                    <span class="text-danger">
                                                        @error('applicant_family_members.' . $loop->index . '.remarks')
                                                            {{ str_replace("applicant family members.{$loop->index}.remarks field", 'family member remarks', $message) }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group mb-10">
                                                    <a href="#!" title="Remove"
                                                        class="btn btn-sm btn-danger delete"
                                                        style="
                                                        padding: 8px 13px 7px!important;
                                                        border-radius: 50%;
                                                        width: 35px;
                                                        font-size: 12.1px;"
                                                        wire:click="removeFamilyMember({{ $loop->index }})"><i
                                                            class="fa-regular fa-x"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            {{-- <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <label class="form-label">Family member name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <label class="form-label">Relation with applicant</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <label class="form-label">Martial Status</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <label class="form-label">Remarks**</label>
                                        </div>
                                    </div>
                                    
                                </div> --}}
                            {{-- <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <input type="text" class="form-control"
                                            wire:model="applicant_family_members_name"
                                            id="applicant_family_members_name" required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <input type="text" class="form-control"
                                            wire:model="applicant_family_members_relation"
                                            id="applicant_family_members_relation" required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <select wire:model="applicant_family_members_martial_status"
                                                id="applicant_family_members_martial_status" class="form-control"
                                                required>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <input type="text" class="form-control"
                                            wire:model="applicant_family_members_remarks"
                                            id="applicant_family_members_remarks" required />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <a style="width: 40px;" href="#!" title="Remove" class="btn btn-sm btn-danger remove_more_1"><i class="fa fa-close"></i></a>
                                    </div>
                                </div> --}}
                            {{-- <button type="button" onclick="saveFamilyMembersDataInTable();"
                                    class="btn btn-success">Save</button> --}}
                        </div>
                    </div>


                    {{-- Table to show saved data --}}
                    {{-- <div class="table-responsive">
                                <table class="table table-bordered" id="data-table-1"
                                wire:model="applicant_personal_details">
                                <thead>
                                        <tr class="fw-bold fs-6 text-gray-800">
                                            <th>Family member name</th>
                                            <th>Relation with applicant</th>
                                            <th>Martial Status</th>
                                            <th>Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div> --}}
                </div>
            </div>
        </div>
@endif


{{-- STEP 4 --}}
@if ($currentStep == 4)
{{-- <input type="hidden" name="scholarshipId" wire:model="scholarshipId"> --}}

    {{-- card start --}}
    <div class="card shadow-sm mb-15" style="width:90%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
                4. Family Members Earnings Information
            </h3>
            {{-- If there is no record entered in form and next is pressed then this will be shown avlue setted from increaseStep function --}}
            @if (session()->has('alert'))
                <div class="alert alert-danger" style="height: 50px!important; margin-top: 10px;">
                    <p>
                        {{ session('alert') }}
                    </p>
                </div>
            @endif
        </div>

        <div class="card-body">

            <div class="card">
                <div class="card-body">

                    <div class="mb-15">
                            <table class="table" id="table-family">
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th>
                                            <div class="form-group mb-10">
                                                <label class="form-label">S#</label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-group mb-10">
                                                <label class="form-label">Family member name</label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-group mb-10">
                                                <label class="form-label">Relation</label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-group mb-10">
                                                <label class="form-label">Occupation</label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-group mb-10">
                                                <label class="form-label">Organization</label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-group mb-10">
                                                <label class="form-label">Designation</label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-group mb-10">
                                                <label class="form-label">Monthly Gross Income</label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-group mb-10">
                                                <label class="form-label">Remarks***</label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-group mb-10">
                                                <a href="#!" title="Add"
                                                    class="btn btn-sm btn-success font-weight-bold"
                                                    style="    padding: 9px 13px 10px!important;
                                                        border-radius: 50%;
                                                        width: 38px;"
                                                    wire:click="addFamilyMemberEarning()"><i
                                                        class="fa-regular fa-plus"></i></a>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($applicant_family_members_earnings as $array)
                                        <tr>
                                            <td>
                                                <div class="form-group mt-5">
                                                    <h5>{{ $loop->index + 1 }}.</h5>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="form-group mb-10">
                                                    <input type="text"
                                                        class="form-control @error('applicant_family_members_earnings.' . $loop->index . '.name') @enderror"
                                                        wire:model="applicant_family_members_earnings.{{ $loop->index }}.name"
                                                        wire:key="family-member-earning-name-{{ $loop->index }}" />
                                                    <span class="text-danger">
                                                        @error('applicant_family_members_earnings.' . $loop->index .
                                                            '.name')
                                                            {{ str_replace("applicant family members earnings.{$loop->index}.name field", 'family member name', $message) }}
                                                        @enderror
                                                    </span>
                                                </div>

                                            </td>

                                            {{-- More below here in a single row all inputs --}}

                                            <td>
                                                <div class="form-group mb-10">
                                                    <input type="text"
                                                        class="form-control @error('applicant_family_members_earnings.' . $loop->index . '.relation') @enderror"
                                                        wire:model="applicant_family_members_earnings.{{ $loop->index }}.relation"
                                                        wire:key="family-member-earning-relation-{{ $loop->index }}" />
                                                    <span class="text-danger">
                                                        @error('applicant_family_members_earnings.' . $loop->index .
                                                            '.relation')
                                                            {{ str_replace("applicant family members earnings.{$loop->index}.relation field", 'family member relation', $message) }}
                                                        @enderror
                                                    </span>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="form-group mb-10">
                                                    <input type="text"
                                                        class="form-control @error('applicant_family_members_earnings.' . $loop->index . '.occupation') @enderror"
                                                        wire:model="applicant_family_members_earnings.{{ $loop->index }}.occupation"
                                                        wire:key="family-member-earning-occupation-{{ $loop->index }}" />
                                                    <span class="text-danger">
                                                        @error('applicant_family_members_earnings.' . $loop->index .
                                                            '.occupation')
                                                            {{ str_replace("applicant family members earnings.{$loop->index}.occupation field", 'family member occupation', $message) }}
                                                        @enderror
                                                    </span>
                                                </div>

                                            </td>


                                            <td>
                                                <div class="form-group mb-10">
                                                    <input type="text"
                                                        class="form-control @error('applicant_family_members_earnings.' . $loop->index . '.organization') @enderror"
                                                        wire:model="applicant_family_members_earnings.{{ $loop->index }}.organization"
                                                        wire:key="family-member-earning-organization-{{ $loop->index }}" />
                                                    <span class="text-danger">
                                                        @error('applicant_family_members_earnings.' . $loop->index .
                                                            '.organization')
                                                            {{ str_replace("applicant family members earnings.{$loop->index}.organization field", 'family member organization', $message) }}
                                                        @enderror
                                                    </span>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="form-group mb-10">
                                                    <input type="text"
                                                        class="form-control @error('applicant_family_members_earnings.' . $loop->index . '.designation') @enderror"
                                                        wire:model="applicant_family_members_earnings.{{ $loop->index }}.designation"
                                                        wire:key="family-member-earning-designation-{{ $loop->index }}" />
                                                    <span class="text-danger">
                                                        @error('applicant_family_members_earnings.' . $loop->index .
                                                            '.designation')
                                                            {{ str_replace("applicant family members earnings.{$loop->index}.designation field", 'family member designation', $message) }}
                                                        @enderror
                                                    </span>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="form-group mb-10">
                                                    <input type="text"
                                                        class="form-control @error('applicant_family_members_earnings.' . $loop->index . '.monthly_gross_income') @enderror"
                                                        wire:model="applicant_family_members_earnings.{{ $loop->index }}.monthly_gross_income"
                                                        wire:key="family-member-earning-monthly-gross- income-{{ $loop->index }}" />
                                                    <span class="text-danger">
                                                        @error('applicant_family_members_earnings.' . $loop->index .
                                                            '.monthly_gross_income')
                                                            {{ str_replace("applicant family members earnings.{$loop->index}.monthly gross income field", 'family member monthly gross income', $message) }}
                                                        @enderror
                                                    </span>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="form-group mb-10">
                                                    <input type="text"
                                                        class="form-control @error('applicant_family_members_earnings.' . $loop->index . '.remarks') @enderror"
                                                        wire:model="applicant_family_members_earnings.{{ $loop->index }}.remarks"
                                                        wire:key="family-member-earning-remarks-{{ $loop->index }}" />
                                                    <span class="text-danger">
                                                        @error('applicant_family_members_earnings.' . $loop->index .
                                                            '.remarks')
                                                            {{ str_replace("applicant family members earnings.{$loop->index}.remarks field", 'family member remarks', $message) }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group mb-10">
                                                    <a href="#!" title="Remove"
                                                        class="btn btn-sm btn-danger delete"
                                                        style="
                                                        padding: 8px 13px 7px!important;
                                                        border-radius: 50%;
                                                        width: 35px;
                                                        font-size: 12.1px;"
                                                        wire:click="removeFamilyMemberEarning({{ $loop->index }})"><i
                                                            class="fa-regular fa-x"></i></a>
                                                </div>
                                            </td>

                                        </tr>

                                        @endforeach
                                </tbody>
                            </table>

                            {{-- Old table --}}
                            {{-- <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group mb-10">
                                            <label class="form-label">Family member name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group mb-10">
                                            <label class="form-label">Relation</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group mb-10">
                                            <label class="form-label">Occupation</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group mb-10">
                                            <label class="form-label">Organization</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group mb-10">
                                            <a href="#!" title="Add" class="btn btn-sm btn-success add_more_family_details font-weight-bold" style="    padding: 9px 13px 10px!important;
                                            border-radius: 50%;
                                            width: 38px;"
                                            wire:click="addFamilyMemberEarning()"><i class="fa-regular fa-plus"></i></a>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <input type="text" class="form-control"
                                                wire:model="applicant_family_member_earnings_member_name"
                                                id="applicant_family_member_earnings_member_name" required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <input type="text" class="form-control"
                                                wire:model="applicant_family_member_earnings_member_relation"
                                                id="applicant_family_member_earnings_member_relation" required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <input type="text" class="form-control"
                                                wire:model="applicant_family_member_earnings_member_occupation"
                                                id="applicant_family_member_earnings_member_occupation" required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <input type="text" class="form-control"
                                                wire:model="applicant_family_member_earnings_member_organization"
                                                id="applicant_family_member_earnings_member_organization" required />
                                        </div>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <label class="form-label">Designation</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <label class="form-label">Monthly Gross Income</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <label class="form-label">Remarks**</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <input type="text" class="form-control"
                                                wire:model="applicant_family_member_earnings_member_designation"
                                                id="applicant_family_member_earnings_member_designation" required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <input type="text" class="form-control"
                                                wire:model="applicant_family_member_earnings_member_monthly_income"
                                                id="applicant_family_member_earnings_member_monthly_income" required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-10">
                                            <input type="text" class="form-control"
                                                wire:model="applicant_family_member_earnings_member_remarks"
                                                id="applicant_family_member_earnings_member_remarks" required />
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button type="button" onclick="saveFamilyMembersEarningDataInTable();"
                                class="btn btn-success">Save</button>
                        </div>


                        {{-- Table to show saved data --}}
                            {{-- <div class="table-responsive">
                            <table class="table table-bordered" id="data-table-2">
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th>Family member name</th>
                                        <th>Relation</th>
                                        <th>Occupation</th>
                                        <th>Organization</th>
                                        <th>Designation</th>
                                        <th>Monthly Gross Income</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer" style="text-align: center">
                        <p style=" width:100%">
                            Total income: <span id="total_income_data_table_2"></span>
                        </p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endif

{{-- STEP 5 --}}
@if ($currentStep == 5)
{{-- <input type="hidden" name="scholarshipId" wire:model="scholarshipId"> --}}

    {{-- card start --}}
    <div class="card shadow-sm  mb-15" style="width:85%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
                5. Brother/Sister/Family Member Studying (Sibling)
            </h3>
            @if(empty($applicant_family_members_currently_studying))
            <div class="card-toolbar">
                <a wire:click="skipStep()" class="btn btn-sm btn-light">
                    Skip & Continue
                </a>
            </div>
            @endif
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">

                    {{-- <div class="mb-15">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">Name</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">Relation</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">Name of Institution</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">Fees per month</label>
                                </div>
                            </div> --}}
                            
                                <table class="table" id="table-family">
                                    <thead>
                                        <tr class="fw-bold fs-6 text-gray-800">
                                            <th>
                                                <div class="form-group mb-10">
                                                    <label class="form-label">S#</label>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="form-group mb-10">
                                                    <label class="form-label">Name</label>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="form-group mb-10">
                                                    <label class="form-label">Relation</label>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="form-group mb-10">
                                                    <label class="form-label">Name of institution</label>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="form-group mb-10">
                                                    <label class="form-label">Fees per month</label>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="form-group mb-10">
                                                    <a href="#!" title="Add"
                                                        class="btn btn-sm btn-success font-weight-bold"
                                                        style="padding: 9px 13px 10px!important;
                                                            border-radius: 50%;
                                                            width: 38px;"
                                                        wire:click="addFamilyMemberCurrentlyStudying()"><i
                                                            class="fa-regular fa-plus"></i></a>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($applicant_family_members_currently_studying as $array)
                                            <tr>
                                                <td>
                                                    <div class="form-group mt-5">
                                                        <h5>{{ $loop->index + 1 }}.</h5>
                                                    </div>
    
                                                </td>
    
                                                <td>
                                                    <div class="form-group mb-10">
                                                        <input type="text"
                                                            class="form-control @error('applicant_family_members_currently_studying.' . $loop->index . '.name') @enderror"
                                                            wire:model="applicant_family_members_currently_studying.{{ $loop->index }}.name"
                                                            wire:key="family-member-currently-studying-name-{{ $loop->index }}" />
                                                        <span class="text-danger">
                                                            @error('applicant_family_members_currently_studying.' . $loop->index .
                                                                '.name')
                                                                {{ str_replace("applicant family members currently studying.{$loop->index}.name field", 'family member name', $message) }}
                                                                @enderror
                                                            </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group mb-10">
                                                        <input type="text"
                                                            class="form-control @error('applicant_family_members_currently_studying.' . $loop->index . '.relation') @enderror"
                                                            wire:model="applicant_family_members_currently_studying.{{ $loop->index }}.relation"
                                                            wire:key="family-member-currently-studying-relation-{{ $loop->index }}" />
                                                        <span class="text-danger">
                                                            @error('applicant_family_members_currently_studying.' . $loop->index .
                                                                '.relation')
                                                                {{ str_replace("applicant family members currently studying.{$loop->index}.relation field", 'family member relation', $message) }}
                                                                @enderror
                                                            </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group mb-10">
                                                        <input type="text"
                                                            class="form-control @error('applicant_family_members_currently_studying.' . $loop->index . '.institution') @enderror"
                                                            wire:model="applicant_family_members_currently_studying.{{ $loop->index }}.institution"
                                                            wire:key="family-member-currently-studying-institution-{{ $loop->index }}" />
                                                        <span class="text-danger">
                                                            @error('applicant_family_members_currently_studying.' . $loop->index .
                                                                '.institution')
                                                                {{ str_replace("applicant family members currently studying.{$loop->index}.institution field", 'family member institution name', $message) }}
                                                                @enderror
                                                            </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group mb-10">
                                                        <input type="text"
                                                            class="form-control @error('applicant_family_members_currently_studying.' . $loop->index . '.fpm') @enderror"
                                                            wire:model="applicant_family_members_currently_studying.{{ $loop->index }}.fpm"
                                                            wire:key="family-member-currently-studying-fpm-{{ $loop->index }}" />
                                                        <span class="text-danger">
                                                            @error('applicant_family_members_currently_studying.' . $loop->index .
                                                                '.fpm')
                                                                {{ str_replace("applicant family members currently studying.{$loop->index}.fpm field", 'family member fees per month', $message) }}
                                                                @enderror
                                                            </span>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-group mb-10">
                                                        <a href="#!" title="Remove"
                                                            class="btn btn-sm btn-danger delete"
                                                            style="
                                                            padding: 8px 13px 7px!important;
                                                            border-radius: 50%;
                                                            width: 35px;
                                                            font-size: 12.1px;"
                                                            wire:click="removeFamilyMemberCurrentlyStudying({{ $loop->index }})"><i
                                                                class="fa-regular fa-x"></i></a>
                                                    </div>
                                                </td>

                                            </tr>

                                            @endforeach
                                    </tbody>
                                </table>
                                
                        {{-- <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control" wire:model="applicant_siblings_name"
                                        id="applicant_siblings_name"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_siblings_relation" id="applicant_siblings_relation"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_siblings_institution_name"
                                        id="applicant_siblings_institution_name" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_siblings_fees_per_month"
                                        id="applicant_siblings_fees_per_month" />
                                </div>
                            </div> --}}

                            
                        {{-- </div> --}}
                        {{-- <button type="button" onclick="saveSiblingDataInTable();"
                            class="btn btn-success">Save</button> --}}
                    </div>


                    {{-- Table to show saved data --}}
                    {{-- <div class="table-responsive">
                        <table class="table table-bordered" id="data-table-3">
                            <thead>
                                <tr class="fw-bold fs-6 text-gray-800">
                                    <th>Name</th>
                                    <th>Relations</th>
                                    <th>Name of institution</th>
                                    <th>Fees per month</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer" style="text-align: center">
                    <p style=" width:100%">
                        Total Fee & Tution Charges: <span id="total_fee_data_table_3"></span>
                    </p>
                </div> --}}
            </div>
        </div>
@endif


{{-- STEP 6 --}}
@if ($currentStep == 6)
{{-- <input type="hidden" name="scholarshipId" wire:model="scholarshipId"> --}}

    {{-- card start --}}
    <div class="card shadow-sm mb-15" style="width:85%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
                6. Father Information
            </h3>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <h4 class="font-size-lg text-dark font-weight-bold mb-20">Please fill in your father
                        details completely and correctly to the best of your knowledge!</h4>

                    <div class="mb-15">
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Father Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" wire:model="applicant_father_details_name"
                                     />
                                     <span class="text-danger">
                                         @error('applicant_father_details_name')
                                         {{ str_replace("The applicant father details name field", 'Father name', $message) }}
                                         @enderror
                                        </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Father CNIC</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" wire:model="applicant_father_details_cnic"
                                placeholder="xxxxx-xxxxxxx-x"/>
                                     <span class="text-danger">
                                         @error('applicant_father_details_cnic')
                                         {{ str_replace("The applicant father details cnic field", 'Father CNIC', $message) }}
                                         @enderror
                                        </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Vital Status</label>
                            <div class="col-lg-6">
                                <select wire:model="applicant_father_details_vital_status" id=""
                                    class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="Alive">Alive</option>
                                    <option value="Deceased">Deceased</option>
                                </select>
                                <span class="text-danger">
                                    @error('applicant_father_details_vital_status')
                                    {{ str_replace("The applicant father details vital status field", 'Vital status', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Professional Status</label>
                            <div class="col-lg-6">
                                <select wire:model="applicant_father_details_job_status" id=""
                                    class="form-control" >
                                    <option value="">Select Status</option>
                                    <option value="Alive">Employed</option>
                                    <option value="Retired">Retired</option>
                                    <option value="Business Owner">Business Owner</option>
                                </select>
                                <span class="text-danger">
                                    @error('applicant_father_details_job_status')
                                    {{ str_replace("The applicant father details job status field", 'Job status', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Marital Status</label>
                            <div class="col-lg-6">
                                <select wire:model="applicant_father_details_martial_status" id=""
                                    class="form-control" >
                                    <option value="">Select Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                </select>
                                <span class="text-danger">
                                    @error('applicant_father_details_martial_status')
                                    {{ str_replace("The applicant father details martial status field", 'Marital status', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Company/Organization Name</label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_father_details_company_name"
                                    class="form-control" placeholder=""  />
                                    <span class="text-danger">
                                        @error('applicant_father_details_company_name')
                                        {{ str_replace("The applicant father details company name field", 'Company name', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Office/Mobile No</label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_father_details_mobile_number"
                                    class="form-control" placeholder="0312-3456789"  />
                                    <span class="text-danger">
                                        @error('applicant_father_details_mobile_number')
                                        {{ str_replace("The applicant father details mobile number field", 'Mobile number', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Occupation type</label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_father_details_occupation"
                                    class="form-control" placeholder=""  />
                                    <span class="text-danger">
                                        @error('applicant_father_details_occupation')
                                        {{ str_replace("The applicant father details occupation field", 'Occupation type', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">NTS</label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_father_details_nts" class="form-control"
                                     />
                                     <span class="text-danger">
                                         @error('applicant_father_details_nts')
                                         {{ str_replace("The applicant father details nts field", 'Father NTS', $message) }}
                                         @enderror
                                        </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Designation & Grade (BPS/SPS/PTC
                                etc.)</label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_father_details_designation_grade"
                                    class="form-control"  />
                                    <span class="text-danger">
                                        @error('applicant_father_details_designation_grade')
                                        {{ str_replace("The applicant father details designation grade field", 'Designation & grade', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Gross Income</label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_father_details_gross_income"
                                    class="form-control"  />
                                    <span class="text-danger">
                                        @error('applicant_father_details_gross_income')
                                        {{ str_replace("The applicant father details gross income field", 'Gross income', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Total Net Monthly
                                Income/Salary/Pension/Other</label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_father_details_monthly_income"
                                    class="form-control"  />
                                    <span class="text-danger">
                                        @error('applicant_father_details_monthly_income')
                                        {{ str_replace("The applicant father details monthly income field", 'Monthly income', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Name of Applicant </label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_father_details_applicant_name"
                                    class="form-control"  />
                                    <span class="text-danger">
                                        @error('applicant_father_details_applicant_name')
                                        {{ str_replace("The applicant father details applicant name field", 'Applicant name', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Relationship </label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_father_details_applicant_relation"
                                    class="form-control"  />
                                    <span class="text-danger">
                                        @error('applicant_father_details_applicant_relation')
                                        {{ str_replace("The applicant father details applicant relation field", 'Applicant relationship', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Occupation & Designation</label>
                            <div class="col-lg-6">
                                <input type="text"
                                    wire:model="applicant_father_details_applicant_occupation_designation"
                                    class="form-control"  />
                                    <span class="text-danger">
                                        @error('applicant_father_details_applicant_occupation_designation')
                                        {{ str_replace("The applicant father details applicant occupation designation field", 'Applicant occupation & designation', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Monthly Financial Support to Applicant in
                                PKR</label>
                            <div class="col-lg-6">
                                <input type="text"
                                    wire:model="applicant_father_details_applicant_monthly_financial_support"
                                    class="form-control"  />
                                    <span class="text-danger">
                                        @error('applicant_father_details_applicant_monthly_financial_support')
                                        {{ str_replace("The applicant father details applicant monthly financial support field", 'Monthly financial support field', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endif



{{-- STEP 7 --}}
@if ($currentStep == 7)
{{-- <input type="hidden" name="scholarshipId" wire:model="scholarshipId"> --}}

    {{-- card start --}}
    <div class="card shadow-sm mb-15" style="width:85%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
                7. Family Monthly Income
            </h3>
            {{-- If there is no record entered in form and next is pressed then this will be shown avlue setted from increaseStep function --}}
            @if (session()->has('alert'))
                <div class="alert alert-danger" style="height: 50px!important; margin-top: 10px;">
                    <p>
                        {{ session('alert') }}
                    </p>
                </div>
            @endif

        </div>
        <div class="card-body">
            <div class="card">

                <div class="card-body">

                    <div class="mb-15">
                        <table class="table">
                            <tr>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">S#</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">Family Member Name</label>
                                    </div>
                                </th>
                            
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">Relationship</label>
                                    </div>
                                </th>

                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">Monthly income from assets</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">Monthly gross income</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">Monthly net income</label>
                                    </div>
                                </th>

                                <th>
                                    <div class="form-group mb-10">
                                        <a href="#!" title="Add"
                                            class="btn btn-sm btn-success font-weight-bold"
                                            style="    padding: 9px 13px 10px!important;
                                                border-radius: 50%;
                                                width: 38px;"
                                            wire:click="addFamilyMonthlyIncome()"><i
                                                class="fa-regular fa-plus"></i></a>
                                    </div>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($applicant_family_monthly_income as $array)
                                <tr>
                                    <td>
                                        <div class="form-group mt-5">
                                            <h5>{{ $loop->index + 1 }}.</h5>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                            <input type="text"
                                                class="form-control @error('applicant_family_monthly_income.' . $loop->index . '.name') @enderror"
                                                wire:model="applicant_family_monthly_income.{{ $loop->index }}.name"
                                                wire:key="family-member-earning-name-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_family_monthly_income.' . $loop->index .
                                                    '.name')
                                                    {{ str_replace("applicant family monthly income.{$loop->index}.name field", 'family member name', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-10">
                                            <input type="text"
                                                class="form-control @error('applicant_family_monthly_income.' . $loop->index . '.relation') @enderror"
                                                wire:model="applicant_family_monthly_income.{{ $loop->index }}.relation"
                                                wire:key="family-member-earning-relation-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_family_monthly_income.' . $loop->index .
                                                    '.relation')
                                                    {{ str_replace("applicant family monthly income.{$loop->index}.relation", 'relationship', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-10">
                                            <input type="text"
                                                class="form-control @error('applicant_family_monthly_income.' . $loop->index . '.monthly_income_from_assets') @enderror"
                                                wire:model="applicant_family_monthly_income.{{ $loop->index }}.monthly_income_from_assets"
                                                wire:key="family-member-earning-monthly_income_from_assets-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_family_monthly_income.' . $loop->index .
                                                    '.monthly_income_from_assets')
                                                    {{ str_replace("applicant family monthly income.{$loop->index}.monthly income from assets field", 'monthly income from assets', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-10">
                                            <input type="text"
                                                class="form-control @error('applicant_family_monthly_income.' . $loop->index . '.monthly_gross_income') @enderror"
                                                wire:model="applicant_family_monthly_income.{{ $loop->index }}.monthly_gross_income"
                                                wire:key="family-member-earning-monthly-gross-income-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_family_monthly_income.' . $loop->index .
                                                    '.monthly_gross_income')
                                                    {{ str_replace("applicant family monthly income.{$loop->index}.monthly gross income field", 'monthly gross income', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-10">
                                            <input type="text"
                                                class="form-control @error('applicant_family_monthly_income.' . $loop->index . '.monthly_net_income') @enderror"
                                                wire:model="applicant_family_monthly_income.{{ $loop->index }}.monthly_net_income"
                                                wire:key="family-member-earning-monthly-net-income-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_family_monthly_income.' . $loop->index .
                                                    '.monthly_net_income')
                                                    {{ str_replace("applicant family monthly income.{$loop->index}.monthly net income field", 'monthly net income', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                            <a href="#!" title="Remove"
                                                class="btn btn-sm btn-danger"
                                                style="
                                                padding: 8px 13px 7px!important;
                                                border-radius: 50%;
                                                width: 35px;
                                                font-size: 12.1px;"
                                                wire:click="removeFamilyMonthlyIncome({{ $loop->index }})"><i
                                                    class="fa-regular fa-x"></i></a>
                                        </div>
                                    </td>


                                {{-- Old form fields --}}
                                {{-- <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_family_monthly_incomes_member_name"
                                        id="applicant_family_monthly_incomes_member_name" />
                                </div>
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_family_monthly_incomes_member_relation"
                                        id="applicant_family_monthly_incomes_member_relation" />
                                </div>
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_family_monthly_incomes_member_monthly_asset_income"
                                        id="applicant_family_monthly_incomes_member_monthly_asset_income" required />
                                </div>
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_family_monthly_incomes_member_monthly_gross_income"
                                        id="applicant_family_monthly_incomes_member_monthly_gross_income" required />
                                </div>
                                    <div class="form-group mb-10">
                                        <label class="form-label">Monthly net income</label>
                                    </div>
                                    <div class="form-group mb-10">
                                        <input type="text" class="form-control"
                                            wire:model="applicant_family_monthly_incomes_member_monthly_net_income"
                                            id="applicant_family_monthly_incomes_member_monthly_net_income" />
                                    </div> --}}

                                    @endforeach
                        </table>
                        {{-- <button type="button" onclick="saveFamilyIncomeDataInTable();"
                            class="btn btn-success">Save</button> --}}
                    </div>


                    {{-- Table to show saved data --}}
                    {{-- <div class="table-responsive">
                        <table class="table table-bordered" id="data-table-4">
                            <thead>
                                <tr class="fw-bold fs-6 text-gray-800">
                                    <th>Name</th>
                                    <th>Relationship</th>
                                    <th>Monthly income from assets</th>
                                    <th>Monthly gross income</th>
                                    <th>Total net income</th>
                                    <th>Total annual income</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>--}}
                </div>
                {{--<div class="card-footer" style="text-align: center">
                    <p style=" width:100%">
                        Total Family Monthly Income: <span id="total_income_data_table_4"></span>
                    </p>
                </div> --}}
            </div>
        </div>
@endif



{{-- STEP 8 --}}

@if ($currentStep == 8)
{{-- <input type="hidden" name="scholarshipId" wire:model="scholarshipId"> --}}

    {{-- card start --}}
    <div class="card shadow-sm mb-15" style="width:85%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
                8. Asset Monthly Income
            </h3>
            @if(empty($applicant_asset_monthly_incomes))
            <div class="card-toolbar">
                <a wire:click="skipStep()" class="btn btn-sm btn-light">
                    Skip & Continue
                </a>
            </div>
            @endif
        </div>
        <div class="card-body">
            <div class="card">
            <div class="card-body">

                <h4 class="font-size-lg text-dark font-weight-bold">Is there any monthly income from assets? If yes then fill this form otherwise skip & continue!</h4> <br>

                <h4 class="font-size-lg text-dark font-weight-bold mb-20"><i>Provide the monthly income details for the selected income type/asset and the income to each entity mentioned.</i></h4>

                <div class="mb-15">
                    
                    <table class="table">
                        <thead>

                            <tr>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">S#</label>
                                    </div>
                                </th>
                                <th width="17%">
                                    <div class="form-group mb-10">
                                        <label class="form-label">Income Type</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">Father</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">Mother</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">Spouse</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">Self</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">Other</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <a href="#!" title="Add"
                                            class="btn btn-sm btn-success font-weight-bold"
                                            style="    padding: 9px 13px 10px!important;
                                                border-radius: 50%;
                                                width: 38px;"
                                            wire:click="addAssetMonthlyIncome()"><i
                                                class="fa-regular fa-plus"></i></a>
                                    </div>
                                </th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($applicant_asset_monthly_incomes as $array)
                                <tr>
                                    <td>
                                        <div class="form-group mt-5">
                                            <h5>{{ $loop->index + 1 }}.</h5>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                                <select
                                                    class="form-control @error('applicant_asset_monthly_incomes.' . $loop->index . '.type') @enderror"
                                                    wire:model="applicant_asset_monthly_incomes.{{ $loop->index }}.type"
                                                    wire:key="family-member-earning-type-{{ $loop->index }}" >
                                                        <option value="">Select type</option>
                                                        <option value="Property Rent">Property Rent</option>
                                                        <option value="Land Lease">Land Lease</option>
                                                        <option value="Bank Deposites">Bank Deposites</option>
                                                        <option value="Share/Securities">Share/Securities</option>
                                                        <option value="Other(Specify)">Other(Specify)</option>
                                                </select>
                                                <span class="text-danger">
                                                    @error('applicant_asset_monthly_incomes.' . $loop->index .
                                                        '.type')
                                                        {{ str_replace("applicant asset monthly incomes.{$loop->index}.type field", 'income type', $message) }}
                                                    @enderror
                                                </span>
                                            
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                            <input type="text"
                                                class="form-control @error('applicant_asset_monthly_incomes.' . $loop->index . '.to_father') @enderror"
                                                wire:model="applicant_asset_monthly_incomes.{{ $loop->index }}.to_father"
                                                wire:key="family-member-earning-monthly-gross-income-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_asset_monthly_incomes.' . $loop->index .
                                                    '.to_father')
                                                    {{ str_replace("applicant asset monthly incomes.{$loop->index}.to father", 'asset income to father', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-10">
                                            <input type="text"
                                                class="form-control @error('applicant_asset_monthly_incomes.' . $loop->index . '.to_mother') @enderror"
                                                wire:model="applicant_asset_monthly_incomes.{{ $loop->index }}.to_mother"
                                                wire:key="family-member-earning-to-mother-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_asset_monthly_incomes.' . $loop->index .
                                                    '.to_mother')
                                                    {{ str_replace("applicant asset monthly incomes.{$loop->index}.to mother", 'asset income to mother', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-10">
                                            <input type="text"
                                                class="form-control @error('applicant_asset_monthly_incomes.' . $loop->index . '.to_spouse') @enderror"
                                                wire:model="applicant_asset_monthly_incomes.{{ $loop->index }}.to_spouse"
                                                wire:key="applicant-asset-monthly-incomes-to-spouse-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_asset_monthly_incomes.' . $loop->index .
                                                    '.to_spouse')
                                                    {{ str_replace("applicant asset monthly incomes.{$loop->index}.to spouse", 'asset income to spouse', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-10">
                                            <input type="text"
                                                class="form-control @error('applicant_asset_monthly_incomes.' . $loop->index . '.to_self') @enderror"
                                                wire:model="applicant_asset_monthly_incomes.{{ $loop->index }}.to_self"
                                                wire:key="applicant-asset-monthly-incomes-to-self-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_asset_monthly_incomes.' . $loop->index .
                                                    '.to_self')
                                                    {{ str_replace("applicant asset monthly incomes.{$loop->index}.to self", 'asset income to self', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-10">
                                            <input type="text"
                                                class="form-control @error('applicant_asset_monthly_incomes.' . $loop->index . '.to_other') @enderror"
                                                wire:model="applicant_asset_monthly_incomes.{{ $loop->index }}.to_other"
                                                wire:key="applicant-asset-monthly-incomes-to-other-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_asset_monthly_incomes.' . $loop->index .
                                                    '.to_other')
                                                    {{ str_replace("applicant asset monthly incomes.{$loop->index}.to other", 'asset income to other', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                            <a href="#!" title="Remove"
                                                class="btn btn-sm btn-danger"
                                                style="
                                                padding: 8px 13px 7px!important;
                                                border-radius: 50%;
                                                width: 35px;
                                                font-size: 12.1px;"
                                                wire:click="removeAssetMonthlyIncome({{ $loop->index }})"><i
                                                    class="fa-regular fa-x"></i></a>
                                        </div>
                                    </td>

                                    @endforeach

                        </tbody>

                    </table>
                            

                    {{-- <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Income Type</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Father</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Mother</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Spouse</label>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <select wire:model="applicant_asset_monthly_incomes_type"
                                    id="applicant_asset_monthly_incomes_type" class="form-control" required>
                                    <option value="">Select type</option>
                                    <option value="Property Rent">Property Rent</option>
                                    <option value="Land Lease">Land Lease</option>
                                    <option value="Bank Deposites">Bank Deposites</option>
                                    <option value="Share/Securities">Share/Securities</option>
                                    <option value="Other(Specify)">Other(Specify)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_asset_monthly_incomes_to_father"
                                    id="applicant_asset_monthly_incomes_to_father" required />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_asset_monthly_incomes_to_mother"
                                    id="applicant_asset_monthly_incomes_to_mother" required />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_asset_monthly_incomes_to_spouse"
                                    id="applicant_asset_monthly_incomes_to_spouse" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">Self</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">Other</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_asset_monthly_incomes_to_self"
                                        id="applicant_asset_monthly_incomes_to_self" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_asset_monthly_incomes_to_other"
                                        id="applicant_asset_monthly_incomes_to_other" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" onclick="saveAssetIncomeDataInTable();"
                        class="btn btn-success">Save</button> --}}
                </div>


                {{-- Table to show saved data --}}
                {{-- <div class="table-responsive">
                    <table class="table table-bordered" id="data-table-5">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th>Income Type</th>
                                <th>Father</th>
                                <th>Mother</th>
                                <th>Spouse</th>
                                <th>Self</th>
                                <th>Other</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div> --}}
            </div>
            {{-- <div class="card-footer" style="text-align: center">
                <p style=" width:100%">
                    Total Asset Monthly Income: <span id="total_income_data_table_5"></span>
                </p>
            </div> --}}
        </div>
@endif


{{-- STEP 9 --}}
@if ($currentStep == 9)
{{-- <input type="hidden" name="scholarshipId" wire:model="scholarshipId"> --}}

    {{-- card start --}}
    <div class="card shadow-sm mb-15" style="width:85%; margin: auto;">

        <div class="card-header">
            <h3 class="card-title">
                9. Accomodation Expenditure
            </h3>
        </div>

        <div class="card-body">

            <div class="card">

                <div class="card-body">

                    <div class="mb-15">

                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">House Type</label>
                            <div class="col-lg-6">
                                <select
                                    class="form-control @error('applicant_family_accomodation_expenditures_type') @enderror"
                                    wire:model="applicant_family_accomodation_expenditures_type">
                                        <option value="">Select Type</option>
                                        <option value="Bungalow">Bungalow</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Town House">Town House</option>
                                        <option value="Village House">Village House</option>
                                </select>
                                <span class="text-danger">
                                    @error('applicant_family_accomodation_expenditures_type')
                                        {{ str_replace("applicant family accomodation expenditures type", 'house type', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Status</label>
                            <div class="col-lg-6">
                                <select
                                    class="form-control @error('applicant_family_accomodation_expenditures_status') @enderror"
                                    wire:model="applicant_family_accomodation_expenditures_status">
                                        <option value="">Select Status</option>
                                        <option value="Bungalow">Rented</option>
                                        <option value="Self/Family Owned">Self/Family Owned</option>
                                        <option value="Employee/Govt/Owned">Employee/Govt/Owned</option>
                                </select>
                                <span class="text-danger">
                                    @error('applicant_family_accomodation_expenditures_status')
                                        {{ str_replace("applicant family accomodation expenditures status", 'status', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Rent payment</label>
                            <div class="col-lg-6">
                                <select
                                    class="form-control @error('applicant_family_accomodation_expenditures_rent_payment_type') @enderror"
                                    wire:model="applicant_family_accomodation_expenditures_rent_payment_type">
                                        <option value="">Select Type</option>
                                        <option value="Self">Self</option>
                                        <option value="Employee/Govt">Employee/Govt</option>
                                        <option value="Other">Other</option>
                                </select>
                                <span class="text-danger">
                                    @error('applicant_family_accomodation_expenditures_rent_payment_type')
                                        {{ str_replace("applicant family accomodation expenditures rent payment type", 'rent payment type', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">House Plot Size in sq covered area</label>
                            <div class="col-lg-6">
                                <input
                                type="text"
                                    class="form-control @error('applicant_family_accomodation_expenditures_plot_size') @enderror"
                                    wire:model="applicant_family_accomodation_expenditures_plot_size"
                                />
                                <span class="text-danger">
                                    @error('applicant_family_accomodation_expenditures_plot_size')
                                        {{ str_replace("applicant family accomodation expenditures plot size", 'plot size', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Accomodation Location/Address Name</label>
                            <div class="col-lg-6">
                                <input
                                    type="text"
                                    class="form-control @error('applicant_family_accomodation_expenditures_address') @enderror"
                                    wire:model="applicant_family_accomodation_expenditures_address"
                                />
                                <span class="text-danger">
                                    @error('applicant_family_accomodation_expenditures_address')
                                        {{ str_replace("applicant family accomodation expenditures address", 'address', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Number of bed rooms</label>
                            <div class="col-lg-6">
                                <select
                                    class="form-control @error('applicant_family_accomodation_expenditures_total_bed_rooms') @enderror"
                                    wire:model="applicant_family_accomodation_expenditures_total_bed_rooms">
                                        <option value="">Select Number</option>
                                        <option value="1-2">1-2</option>
                                        <option value="2-4">2-4</option>
                                        <option value="4-6">4-6</option>
                                </select>
                                <span class="text-danger">
                                    @error('applicant_family_accomodation_expenditures_total_bed_rooms')
                                        {{ str_replace("applicant family accomodation expenditures total bed rooms", 'number of bed rooms', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Number of A.C</label>
                            <div class="col-lg-6">
                                <select
                                    class="form-control @error('applicant_family_accomodation_expenditures_total_acs') @enderror"
                                    wire:model="applicant_family_accomodation_expenditures_total_acs">
                                        <option value="">Select Number</option>
                                        <option value="0-0">0</option>
                                        <option value="1-2">1-2</option>
                                        <option value="2-4">2-4</option>
                                        <option value="4-6">4-6</option>
                                    </select>
                                <span class="text-danger">
                                    @error('applicant_family_accomodation_expenditures_total_acs')
                                    {{ str_replace("applicant family accomodation expenditures total acs", 'number of ACs', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Accomodation Monthly Rent</label>
                            <div class="col-lg-6">
                                <input
                                    type="text"
                                    class="form-control @error('applicant_family_accomodation_expenditures_monthly_rent') @enderror"
                                    wire:model="applicant_family_accomodation_expenditures_monthly_rent"
                                />
                                <span class="text-danger">
                                    @error('applicant_family_accomodation_expenditures_monthly_rent')
                                        {{ str_replace("applicant family accomodation expenditures monthly rent", 'monthly rent', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Accomodation Annual Rent</label>
                            <div class="col-lg-6">
                                <input
                                    type="text"
                                    class="form-control @error('applicant_family_accomodation_expenditures_annual_rent_expense') @enderror"
                                    wire:model="applicant_family_accomodation_expenditures_annual_rent_expense"
                                />
                                <span class="text-danger">
                                    @error('applicant_family_accomodation_expenditures_annual_rent_expense')
                                        {{ str_replace("applicant family accomodation expenditures annual rent expense", 'annual rent expense', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Total Accomodation Rental Expenditure</label>
                            <div class="col-lg-6">
                                <input
                                    type="text"
                                    class="form-control @error('applicant_family_accomodation_expenditures_total_rent_expense') @enderror"
                                    wire:model="applicant_family_accomodation_expenditures_total_rent_expense"
                                />
                                <span class="text-danger">
                                    @error('applicant_family_accomodation_expenditures_total_rent_expense')
                                        {{ str_replace("applicant family accomodation expenditures total rent expense", 'total rent expense', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        
                        {{-- <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">House Type</label>
                            <div class="col-lg-6">
                                <select wire:model="applicant_family_accomodation_expenditures_type" id=""
                                    class="form-control" required>
                                    <option value="">Select Type</option>
                                    <option value="Bungalow">Bungalow</option>
                                    <option value="Apartment">Apartment</option>
                                    <option value="Town House">Town House</option>
                                    <option value="Village House">Village House</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Status</label>
                            <div class="col-lg-6">
                                <select wire:model="applicant_family_accomodation_expenditures_status" id=""
                                    class="form-control" required>
                                    <option value="">Select Status</option>
                                    <option value="Bungalow">Rented</option>
                                    <option value="Self/Family Owned">Self/Family Owned</option>
                                    <option value="Employee/Govt/Owned">Employee/Govt/Owned</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Rent Payment</label>
                            <div class="col-lg-6">
                                <select wire:model="applicant_family_accomodation_expenditures_rent_payment_type"
                                    id="" class="form-control" required>
                                    <option value="">Select Type</option>
                                    <option value="Self">Self</option>
                                    <option value="Employee/Govt">Employee/Govt</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">House Plot Size in sq covered area</label>
                            <div class="col-lg-6">
                                <input type="text"
                                    wire:model="applicant_family_accomodation_expenditures_plot_size"
                                    class="form-control" placeholder="" required />
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Accomodation Location/Address Name</label>
                            <div class="col-lg-6">
                                <input type="text" wire:model="applicant_family_accomodation_expenditures_address"
                                    class="form-control" placeholder="" required />
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Number of bed rooms</label>
                            <div class="col-lg-6">
                                <select wire:model="applicant_family_accomodation_expenditures_total_bed_rooms"
                                    id="" class="form-control" required>
                                    <option value="">Select Number</option>
                                    <option value="1-2">1-2</option>
                                    <option value="2-4">2-4</option>
                                    <option value="4-6">4-6</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Number of A.C</label>
                            <div class="col-lg-6">
                                <select wire:model="applicant_family_accomodation_expenditures_total_ACs"
                                    id="" class="form-control" required>
                                    <option value="">Select Number</option>
                                    <option value="0-0">0-0</option>
                                    <option value="1-2">1-2</option>
                                    <option value="2-4">2-4</option>
                                    <option value="4-6">4-6</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Accomodation Monthly Rent</label>
                            <div class="col-lg-6">
                                <input type="text"
                                    wire:model="applicant_family_accomodation_expenditures_monthly_rent"
                                    class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Accomodation Annual Rent</label>
                            <div class="col-lg-6">
                                <input type="text"
                                    wire:model="applicant_family_accomodation_expenditures_annual_rent_expense"
                                    class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Total Accomodation Rental
                                Expenditure</label>
                            <div class="col-lg-6">
                                <input type="text"
                                    wire:model="applicant_family_accomodation_expenditures_total_rent_expense"
                                    class="form-control" required />
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
@endif



{{-- STEP 10 --}}

@if ($currentStep == 10)
{{-- <input type="hidden" name="scholarshipId" wire:model="scholarshipId"> --}}

    {{-- card start --}}
    <div class="card shadow-sm mb-15" style="width:85%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
                10. Other Accomodation Expenditure
            </h3>
        </div>
        <div class="card-body">
            <div class="card-body">

                <h4 class="font-size-lg text-dark font-weight-bold mb-20">Please fill in the other accomodation expense amount.</h4>

                <div class="mb-15">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Telephone</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Electricity</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Gas</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Water</label>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_other_accomodation_expenditures_telephone"
                                    id="applicant_other_accomodation_expenditures_telephone"  />
                                    <span class="text-danger">
                                        @error('applicant_other_accomodation_expenditures_telephone')
                                            {{ str_replace("applicant other accomodation expenditures telephone", 'telephone expense', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_other_accomodation_expenditures_electricity"
                                    id="applicant_other_accomodation_expenditures_electricity"  />
                                    <span class="text-danger">
                                        @error('applicant_other_accomodation_expenditures_electricity')
                                            {{ str_replace("applicant other accomodation expenditures electricity", 'electricity expense', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_other_accomodation_expenditures_gas"
                                    id="applicant_other_accomodation_expenditures_gas"  />
                                    <span class="text-danger">
                                        @error('applicant_other_accomodation_expenditures_gas')
                                            {{ str_replace("applicant other accomodation expenditures gas", 'gas expense', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_other_accomodation_expenditures_water"
                                    id="applicant_other_accomodation_expenditures_water"  />
                                    <span class="text-danger">
                                        @error('applicant_other_accomodation_expenditures_water')
                                            {{ str_replace("applicant other accomodation expenditures water", 'water expense', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Education</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Accomodation</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Utilities</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Medical</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_other_accomodation_expenditures_education"
                                    id="applicant_other_accomodation_expenditures_education"  />
                                    <span class="text-danger">
                                        @error('applicant_other_accomodation_expenditures_education')
                                            {{ str_replace("applicant other accomodation expenditures education", 'education expense', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_other_accomodation_expenditures_accomodation"
                                    id="applicant_other_accomodation_expenditures_accomodation"  />
                                    <span class="text-danger">
                                        @error('applicant_other_accomodation_expenditures_accomodation')
                                            {{ str_replace("applicant other accomodation expenditures accomodation", 'accomodation expense', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_other_accomodation_expenditures_utilities"
                                    id="applicant_other_accomodation_expenditures_utilities"  />
                                    <span class="text-danger">
                                        @error('applicant_other_accomodation_expenditures_utilities')
                                            {{ str_replace("applicant other accomodation expenditures utilities", 'utilities expense', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_other_accomodation_expenditures_medical"
                                    id="applicant_other_accomodation_expenditures_medical"  />
                                    <span class="text-danger">
                                        @error('applicant_other_accomodation_expenditures_medical')
                                            {{ str_replace("applicant other accomodation expenditures medical", 'medical expense', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Misc</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_other_accomodation_expenditures_misc"
                                    id="applicant_other_accomodation_expenditures_misc"  />
                                    <span class="text-danger">
                                        @error('applicant_other_accomodation_expenditures_misc')
                                            {{ str_replace("applicant other accomodation expenditures misc", 'miscellaneous expense', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Table to show saved data --}}
                {{-- <div class="table-responsive">
                            <table class="table table-bordered" id="data-table-6">
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th>Telephone</th>
                                        <th>Electricity</th>
                                        <th>Gas</th>
                                        <th>Water</th>
                                        <th>Education</th>
                                        <th>Accomodation</th>
                                        <th>Utilities</th>
                                        <th>Medical</th>
                                        <th>Misc</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div> --}}
            </div>
            {{-- <div class="card-footer" style="text-align: center">
                        <p style=" width:100%">
                            Total Asset Monthly Income: <span id="total_income_data_table_5"></span>
                        </p>
                    </div> --}}
        </div>
@endif

{{-- STEP 11 --}}
@if ($currentStep == 11)
{{-- <input type="hidden" name="scholarshipId" wire:model="scholarshipId"> --}}

    {{-- card start --}}
    <div class="card shadow-sm mb-15" style="width:85%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
                11. Asset with current market value
            </h3>
            {{-- Show only if new row is not added by user in the table --}}
            @if(empty($applicant_other_assets))
            <div class="card-toolbar">
                <a wire:click="skipStep()" class="btn btn-sm btn-light">
                    Skip & Continue
                </a>
            </div>
            @endif
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <h4 class="font-size-lg text-dark font-weight-bold mb-20">Does the family own any transport? If yes
                        then fill this form otherwise skip & continue!</h4>

                    <div class="mb-15">

                        <table class="table">
                            <thead>
    
                                <tr>
                                    <th>
                                        <div class="form-group mb-10">
                                            <label class="form-label">S#</label>
                                        </div>
                                    </th>
                                    <th width="17%">
                                        <div class="form-group mb-10">
                                            <label class="form-label">Transport Type</label>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group mb-10">
                                            <label class="form-label">Make/Model</label>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group mb-10">
                                            <label class="form-label">Engine Capacity (CC)</label>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group mb-10">
                                            <label class="form-label">Registration No</label>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group mb-10">
                                            <label class="form-label">Ownership Period</label>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group mb-10">
                                            <a href="#!" title="Add"
                                                class="btn btn-sm btn-success font-weight-bold"
                                                style="    padding: 9px 13px 10px!important;
                                                    border-radius: 50%;
                                                    width: 38px;"
                                                wire:click="addOtherAsset()"><i
                                                    class="fa-regular fa-plus"></i></a>
                                        </div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($applicant_other_assets as $array)
                                    <tr>
                                        <td>
                                            <div class="form-group mt-5">
                                                <h5>{{ $loop->index + 1 }}.</h5>
                                            </div>
    
                                        </td>
    
                                        <td>
                                            <div class="form-group mb-10">
                                                    <select
                                                        class="form-control @error('applicant_other_assets.' . $loop->index . '.transport_type') @enderror"
                                                        wire:model="applicant_other_assets.{{ $loop->index }}.transport_type"
                                                        wire:key="applicant-other-assets-transport-type-{{ $loop->index }}" >
                                                        <option value="">Select type</option>
                                                        <option value="Car">Car</option>
                                                            <option value="Motor">Motor</option>
                                                            <option value="Other">Other</option>
                                                    </select>
                                                    <span class="text-danger">
                                                        @error('applicant_other_assets.' . $loop->index .
                                                            '.transport_type')
                                                            {{ str_replace("applicant other assets.{$loop->index}.transport type field", 'transport type', $message) }}
                                                            @enderror
                                                    </span>
                                                
                                                </div>
    
                                        </td>
    
                                        <td>
                                            <div class="form-group mb-10">
                                                <input 
                                                    type="text"
                                                    placeholder="2014"
                                                    class="form-control @error('applicant_other_assets.' . $loop->index . '.model_no') @enderror"
                                                    wire:model="applicant_other_assets.{{ $loop->index }}.model_no"
                                                    wire:key="applicant-other-assets-model-no-{{ $loop->index }}" />
                                                <span class="text-danger">
                                                    @error('applicant_other_assets.' . $loop->index .
                                                        '.model_no')
                                                        {{ str_replace("applicant other assets.{$loop->index}.model no field", 'model year', $message) }}
                                                    @enderror
                                                </span>
                                            </div>
    
                                        </td>

                                        <td>
                                            <div class="form-group mb-10">
                                                <input 
                                                type="text"
                                                placeholder="900cc"
                                                    class="form-control @error('applicant_other_assets.' . $loop->index . '.engine_capacity') @enderror"
                                                    wire:model="applicant_other_assets.{{ $loop->index }}.engine_capacity"
                                                    wire:key="applicant-other-assets-engine-capacity-{{ $loop->index }}" />
                                                <span class="text-danger">
                                                    @error('applicant_other_assets.' . $loop->index .
                                                        '.engine_capacity')
                                                        {{ str_replace("applicant other assets.{$loop->index}.engine capacity field", 'engine capacity', $message) }}
                                                    @enderror
                                                </span>
                                            </div>
    
                                        </td>
    
                                        <td>
                                            <div class="form-group mb-10">
                                                <input 
                                                    type="text"
                                                    placeholder="ABC-123"
                                                    class="form-control @error('applicant_other_assets.' . $loop->index . '.reg_no') @enderror"
                                                    wire:model="applicant_other_assets.{{ $loop->index }}.reg_no"
                                                    wire:key="applicant-other-assets-reg-no-{{ $loop->index }}" />
                                                <span class="text-danger">
                                                    @error('applicant_other_assets.' . $loop->index .
                                                        '.reg_no')
                                                        {{ str_replace("applicant other assets.{$loop->index}.reg no field", 'registration number', $message) }}
                                                    @enderror
                                                </span>
                                            </div>
    
                                        </td>
    
                                        <td>
                                            <div class="form-group mb-10">
                                                <input 
                                                    type="text"
                                                    placeholder="5 years"
                                                    class="form-control @error('applicant_other_assets.' . $loop->index . '.ownership_period') @enderror"
                                                    wire:model="applicant_other_assets.{{ $loop->index }}.ownership_period"
                                                    wire:key="applicant-other-assets-ownership-period-{{ $loop->index }}" />
                                                <span class="text-danger">
                                                    @error('applicant_other_assets.' . $loop->index .
                                                        '.ownership_period')
                                                        {{ str_replace("applicant other assets.{$loop->index}.ownership period field", 'ownership period', $message) }}
                                                    @enderror
                                                </span>
                                            </div>
    
                                        </td>

                                        <td>
                                            <div class="form-group mb-10">
                                                <a href="#!" title="Remove"
                                                    class="btn btn-sm btn-danger"
                                                    style="
                                                    padding: 8px 13px 7px!important;
                                                    border-radius: 50%;
                                                    width: 35px;
                                                    font-size: 12.1px;"
                                                    wire:click="removeOtherAsset({{ $loop->index }})"><i
                                                        class="fa-regular fa-x"></i></a>
                                            </div>
                                        </td>
    
                                    </tr>

                                    @endforeach

                            </tbody>
                        </table>


                        {{-- <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">Transport Type</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">Make/Model</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">Engine Capacity (CC)</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">Registration No</label>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <select wire:model="applicant_other_assets_transport_type"
                                        id="applicant_other_assets_transport_type" class="form-control" required>
                                        <option value="">Select type</option>
                                        <option value="Car">Car</option>
                                        <option value="Motor">Motor</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_other_assets_model_no"
                                        id="applicant_other_assets_model_no" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_other_assets_engine_capacity"
                                        id="applicant_other_assets_engine_capacity" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_other_assets_reg_no" id="applicant_other_assets_reg_no"
                                        required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group mb-10">
                                        <label class="form-label">Ownership Period</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group mb-10">
                                        <input type="text" class="form-control"
                                            wire:model="applicant_other_assets_ownership_period"
                                            id="applicant_other_assets_ownership_period" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" onclick="saveTransportDataInTable();"
                            class="btn btn-success">Save</button>
                    </div> --}}


                    {{-- Table to show saved data --}}
                    {{--<div class="table-responsive">
                        <table class="table table-bordered" id="data-table-6">
                            <thead>
                                <tr class="fw-bold fs-6 text-gray-800">
                                    <th>Transport type</th>
                                    <th>Make/Model</th>
                                    <th>Engine Capacity (CC)</th>
                                    <th>Registration No</th>
                                    <th>Ownership Period</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>
@endif


{{-- STEP 12 --}}
@if ($currentStep == 12)
{{-- <input type="hidden" name="scholarshipId" wire:model="scholarshipId"> --}}

    {{-- card start --}}
    <div class="card shadow-sm mb-15" style="width:85%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
               12. Area & Location of Land/Plots Owned
            </h3>
            {{-- Show only if theere is no owned plot record row in the array --}}
            @if(empty($applicant_owned_plots))
            <div class="card-toolbar">
                <a wire:click="skipStep()" class="btn btn-sm btn-light">
                    Skip & Continue
                </a>
            </div>
            @endif
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">

                    <h4 class="font-size-lg text-dark font-weight-bold mb-20">Does the family own any land/plots? If yes then fill this form otherwise skip & continue!</h4>

                    <div class="mb-15">
                        
                        <table class="table">
                            <thead>
    
                                <tr>
                                    <th>
                                        <div class="form-group mb-10">
                                            <label class="form-label">S#</label>
                                        </div>
                                    </th>
                                    <th width="17%">
                                        <div class="form-group mb-10">
                                            <label class="form-label">Asset title</label>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group mb-10">
                                            <label class="form-label">Qty</label>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group mb-10">
                                            <label class="form-label">Size</label>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group mb-10">
                                            <label class="form-label">Location</label>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group mb-10">
                                            <label class="form-label">Cultivable Area</label>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group mb-10">
                                            <label class="form-label">Agricultural</label>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group mb-10">
                                            <a href="#!" title="Add"
                                                class="btn btn-sm btn-success font-weight-bold"
                                                style="    padding: 9px 13px 10px!important;
                                                    border-radius: 50%;
                                                    width: 38px;"
                                                wire:click="addOwnedPlot()"><i
                                                    class="fa-regular fa-plus"></i></a>
                                        </div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($applicant_owned_plots as $array)
                                    <tr>
                                        <td>
                                            <div class="form-group mt-5">
                                                <h5>{{ $loop->index + 1 }}.</h5>
                                            </div>
    
                                        </td>
    
                                        <td>
                                            <div class="form-group mb-10">
                                                    <select
                                                        class="form-control @error('applicant_owned_plots.' . $loop->index . '.asset_title') @enderror"
                                                        wire:model="applicant_owned_plots.{{ $loop->index }}.asset_title"
                                                        wire:key="applicant-owned-plots-asset-title-{{ $loop->index }}" >
                                                            <option value="">Select type</option>
                                                            <option value="Commercial">Commercial</option>
                                                            <option value="Residential">Residential</option>
                                                            <option value="Agricultural">Agricultural</option>
                                                            <option value="Employee/Govt Scheme">Employee/Govt Scheme</option>
                                                    </select>
                                                    <span class="text-danger">
                                                        @error('applicant_owned_plots.' . $loop->index .
                                                            '.asset_title')
                                                            {{ str_replace("applicant owned plots.{$loop->index}.asset title field", 'asset title', $message) }}
                                                            @enderror
                                                    </span>
                                                
                                                </div>
    
                                        </td>
    
                                        <td>
                                            <div class="form-group mb-10">
                                                <input 
                                                    type="text"
                                                    class="form-control @error('applicant_owned_plots.' . $loop->index . '.quantity') @enderror"
                                                    wire:model="applicant_owned_plots.{{ $loop->index }}.quantity"
                                                    wire:key="applicant-owned-plots-quantity-{{ $loop->index }}" />
                                                <span class="text-danger">
                                                    @error('applicant_owned_plots.' . $loop->index .
                                                        '.quantity')
                                                        {{ str_replace("applicant owned plots.{$loop->index}.quantity field", 'quantity', $message) }}
                                                    @enderror
                                                </span>
                                            </div>
    
                                        </td>

                                        <td>
                                            <div class="form-group mb-10">
                                                <input 
                                                    type="text"
                                                    class="form-control @error('applicant_owned_plots.' . $loop->index . '.size') @enderror"
                                                    wire:model="applicant_owned_plots.{{ $loop->index }}.size"
                                                    wire:key="applicant-owned-plots-size-{{ $loop->index }}" />
                                                <span class="text-danger">
                                                    @error('applicant_owned_plots.' . $loop->index .
                                                        '.size')
                                                        {{ str_replace("applicant owned plots.{$loop->index}.size field", 'size', $message) }}
                                                    @enderror
                                                </span>
                                            </div>
    
                                        </td>
    
                                        <td>
                                            <div class="form-group mb-10">
                                                <input 
                                                    type="text"
                                                    class="form-control @error('applicant_owned_plots.' . $loop->index . '.location') @enderror"
                                                    wire:model="applicant_owned_plots.{{ $loop->index }}.location"
                                                    wire:key="applicant-owned-plots-location-{{ $loop->index }}" />
                                                <span class="text-danger">
                                                    @error('applicant_owned_plots.' . $loop->index .
                                                        '.location')
                                                        {{ str_replace("applicant owned plots.{$loop->index}.location field", 'location', $message) }}
                                                    @enderror
                                                </span>
                                            </div>
    
                                        </td>
    
                                        <td>
                                            <div class="form-group mb-10">
                                                <input 
                                                    type="text"
                                                    class="form-control @error('applicant_owned_plots.' . $loop->index . '.cultivable_area') @enderror"
                                                    wire:model="applicant_owned_plots.{{ $loop->index }}.cultivable_area"
                                                    wire:key="applicant-owned-plots-cultivable-area-{{ $loop->index }}" />
                                                <span class="text-danger">
                                                    @error('applicant_owned_plots.' . $loop->index .
                                                        '.cultivable_area')
                                                        {{ str_replace("applicant owned plots.{$loop->index}.cultivable area field", 'cultivable area', $message) }}
                                                    @enderror
                                                </span>
                                            </div>
    
                                        </td>
    
                                        <td>
                                            <div class="form-group mb-10">
                                                <input 
                                                    type="text"
                                                    class="form-control @error('applicant_owned_plots.' . $loop->index . '.agricultural') @enderror"
                                                    wire:model="applicant_owned_plots.{{ $loop->index }}.agricultural"
                                                    wire:key="applicant-owned-plots-agricultural-{{ $loop->index }}" />
                                                <span class="text-danger">
                                                    @error('applicant_owned_plots.' . $loop->index .
                                                        '.agricultural')
                                                        {{ str_replace("applicant owned plots.{$loop->index}.agricultural field", 'agricultural', $message) }}
                                                    @enderror
                                                </span>
                                            </div>
    
                                        </td>

                                        <td>
                                            <div class="form-group mb-10">
                                                <a href="#!" title="Remove"
                                                    class="btn btn-sm btn-danger"
                                                    style="
                                                    padding: 8px 13px 7px!important;
                                                    border-radius: 50%;
                                                    width: 35px;
                                                    font-size: 12.1px;"
                                                    wire:click="removeOwnedPlot({{ $loop->index }})"><i
                                                        class="fa-regular fa-x"></i></a>
                                            </div>
                                        </td>

                                    </tr>

                                    @endforeach

                            </tbody>
                        </table>



                        {{-- <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">Asset title</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">Qty</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">Size</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">Location</label>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <select wire:model="applicant_owned_plots_asset_title"
                                        id="applicant_owned_plots_asset_type" class="form-control" required>
                                        <option value="">Select type</option>
                                        <option value="Commercial">Commercial</option>
                                        <option value="Residential">Residential</option>
                                        <option value="Agricultural">Agricultural</option>
                                        <option value="Employee/Govt Scheme">Employee/Govt Scheme</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_owned_plots_quantity"
                                        id="applicant_owned_plots_quantity" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_owned_plots_size" id="applicant_owned_plots_size"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_owned_plots_location"
                                        id="applicant_owned_plots_location" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group mb-10">
                                        <label class="form-label">Cultivable Area</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group mb-10">
                                        <label class="form-label">Agricultural</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group mb-10">
                                        <input type="text" class="form-control"
                                            wire:model="applicant_owned_plots_cultivable_area"
                                            id="applicant_owned_plots_cultivable_area" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group mb-10">
                                        <input type="text" class="form-control"
                                            wire:model="applicant_owned_plots_agricultural"
                                            id="applicant_owned_plots_agricultural" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" onclick="saveLandDataInTable();" class="btn btn-success">Save</button>--}}
                    </div>


                    {{-- Table to show saved data --}}
                    {{--<div class="table-responsive">
                        <table class="table table-bordered" id="data-table-7">
                            <thead>
                                <tr class="fw-bold fs-6 text-gray-800">
                                    <th>Asset tite</th>
                                    <th>Qty</th>
                                    <th>Size</th>
                                    <th>Location</th>
                                    <th>Cultivable Area</th>
                                    <th>Agricultural</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div> --}}
                </div>
            </div>
        </div>
@endif



{{-- STEP 13 --}}
@if ($currentStep == 13)
{{-- <input type="hidden" name="scholarshipId" wire:model="scholarshipId"> --}}

    {{-- card start --}}
    <div class="card shadow-sm mb-15" style="width:85%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
                13. Asset Worth Current Market Value
            </h3>
            {{-- Show only if all there is no record --}}
            @if(empty($applicant_worth_assets))
            <div class="card-toolbar">
                <a wire:click="skipStep()" class="btn btn-sm btn-light">
                    Skip & Continue
                </a>
            </div>
            @endif
        </div>
        <div class="card-body">
            <div class="card">
            <div class="card-body">

                <h4 class="font-size-lg text-dark font-weight-bold mb-20">
                    Does the family own any transport? If yes then fill this form otherwise skip & continue! <br> <br>
                    <i>Provide the asset details for the selected asset.</i></h4>

                <div class="mb-15">

                    <table class="table">
                        <thead>

                            <tr>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">S#</label>
                                    </div>
                                </th>
                                <th width="17%">
                                    <div class="form-group mb-10">
                                        <label class="form-label">Asset title</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">Father</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">Mother</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">Spouse</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">Guardian</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <a href="#!" title="Add"
                                            class="btn btn-sm btn-success font-weight-bold"
                                            style="    padding: 9px 13px 10px!important;
                                                border-radius: 50%;
                                                width: 38px;"
                                            wire:click="addWorthAsset()"><i
                                                class="fa-regular fa-plus"></i></a>
                                    </div>
                                </th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($applicant_worth_assets as $array)
                                <tr>
                                    <td>
                                        <div class="form-group mt-5">
                                            <h5>{{ $loop->index + 1 }}.</h5>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                                <select
                                                    class="form-control @error('applicant_worth_assets.' . $loop->index . '.asset_title') @enderror"
                                                    wire:model="applicant_worth_assets.{{ $loop->index }}.asset_title"
                                                    wire:key="applicant-worth-assets-asset-title-{{ $loop->index }}" >
                                                        <option value="">Select type</option>
                                                        <option value="House">House</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Land/Building">Land/Building</option>
                                                        <option value="Bank Balance">Bank Balance</option>
                                                        <option value="Stocks/Price">Stocks/Price</option>
                                                        <option value="Other/Cattle(s)">Other/Cattle(s)</option>
                                                </select>
                                                <span class="text-danger">
                                                    @error('applicant_worth_assets.' . $loop->index .
                                                        '.asset_title')
                                                        {{ str_replace("applicant worth assets.{$loop->index}.asset title field", 'asset title', $message) }}
                                                        @enderror
                                                </span>
                                            
                                            </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                            <input 
                                                type="text"
                                                class="form-control @error('applicant_worth_assets.' . $loop->index . '.to_father') @enderror"
                                                wire:model="applicant_worth_assets.{{ $loop->index }}.to_father"
                                                wire:key="applicant-worth-assets-to-father-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_worth_assets.' . $loop->index .
                                                    '.to_father')
                                                    {{ str_replace("applicant worth assets.{$loop->index}.to father", 'father', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                            <input 
                                                type="text"
                                                class="form-control @error('applicant_worth_assets.' . $loop->index . '.to_mother') @enderror"
                                                wire:model="applicant_worth_assets.{{ $loop->index }}.to_mother"
                                                wire:key="applicant-worth-assets-to-mother-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_worth_assets.' . $loop->index .
                                                    '.to_mother')
                                                    {{ str_replace("applicant worth assets.{$loop->index}.to mother", 'mother', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                            <input 
                                                type="text"
                                                class="form-control @error('applicant_worth_assets.' . $loop->index . '.to_spouse') @enderror"
                                                wire:model="applicant_worth_assets.{{ $loop->index }}.to_spouse"
                                                wire:key="applicant-worth-assets-to-spouse-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_worth_assets.' . $loop->index .
                                                    '.to_spouse')
                                                    {{ str_replace("applicant worth assets.{$loop->index}.to spouse", 'spouse', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                            <input 
                                                type="text"
                                                class="form-control @error('applicant_worth_assets.' . $loop->index . '.to_guardian') @enderror"
                                                wire:model="applicant_worth_assets.{{ $loop->index }}.to_guardian"
                                                wire:key="applicant-worth-assets-to-guardian-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_worth_assets.' . $loop->index .
                                                    '.to_guardian')
                                                    {{ str_replace("applicant worth assets.{$loop->index}.to guardian", 'guardian', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                            <a href="#!" title="Remove"
                                                class="btn btn-sm btn-danger"
                                                style="
                                                padding: 8px 13px 7px!important;
                                                border-radius: 50%;
                                                width: 35px;
                                                font-size: 12.1px;"
                                                wire:click="removeWorthAsset({{ $loop->index }})"><i
                                                    class="fa-regular fa-x"></i></a>
                                        </div>
                                    </td>
                                    
                                </tr>

                                @endforeach

                        </tbody>

                    </table>


                    {{-- <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Asset Title</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Father</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Mother</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Spouse</label>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <select wire:model="applicant_worth_assets_asset_title"
                                    id="applicant_worth_assets_asset_title" class="form-control" required>
                                    <option value="">Select type</option>
                                    <option value="House">House</option>
                                    <option value="Business">Business</option>
                                    <option value="Land/Building">Land/Building</option>
                                    <option value="Bank Balance">Bank Balance</option>
                                    <option value="Stocks/Price">Stocks/Price</option>
                                    <option value="Other/Cattle(s)">Other/Cattle(s)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_worth_assets_to_father"
                                    id="applicant_worth_assets_to_father" required />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_worth_assets_to_mother"
                                    id="applicant_worth_assets_to_mother" required />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_worth_assets_to_spouse"
                                    id="applicant_worth_assets_to_spouse" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">Guardian</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_worth_assets_to_guardian"
                                        id="applicant_worth_assets_to_guardian" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" onclick="saveAssetWorthDataInTable();"
                        class="btn btn-success">Save</button> --}}
                </div>


                {{-- Table to show saved data --}}
                {{-- <div class="table-responsive">
                    <table class="table table-bordered" id="data-table-8">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th>Asset Title</th>
                                <th>Father</th>
                                <th>Mother</th>
                                <th>Spouse</th>
                                <th>Guardian</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>--}}
                </div>
            </div>
            {{--<div class="card-footer" style="text-align: center">
                <p style=" width:100%">
                    Total Asset Monthly Income: <span id="total_income_data_table_8"></span>
                </p>
            </div> --}}
        </div>
@endif



{{-- STEP 14 --}}
@if ($currentStep == 14)
{{-- <input type="hidden" name="scholarshipId" wire:model="scholarshipId"> --}}

    {{-- card start --}}
    <div class="card shadow-sm mb-15" style="width:85%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
                14. Loan Taken for Application Education
            </h3>
            {{-- Show only if all the three reasons are empty --}}
            @if(empty($applicant_loans_loan_one_reason) && empty($applicant_loans_loan_two_reason) && empty($applicant_loans_loan_three_reason))
            <div class="card-toolbar">
                <a wire:click="skipStep()" class="btn btn-sm btn-light">
                    Skip & Continue
                </a>
            </div>
            @endif
        </div>
        <div class="card-body">
            <div class="card">

                <div class="card-body">
                    <h4 class="font-size-lg text-dark font-weight-bold mb-20">Have you taken any loan for education? If yes, Fill the relevant details otherwise skip & continue!</h4>

                    <div class="mb-15">
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Statement of Purpose (Please
                                specify)</label>
                            <div class="col-lg-6">
                                <textarea rows="10" cols="30" class="form-control" wire:model="applicant_loans_loan_one_reason"
                                    ></textarea>
                                <span class="text-danger">
                                    @error('applicant_loans_loan_one_reason')
                                        {{ str_replace("The applicant loans loan one reason field is required.", 'At least one reason is required to fill this and move to next form.', $message) }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Statement of Purpose (Please
                                specify)</label>
                            <div class="col-lg-6">
                                <textarea rows="10" cols="30" class="form-control" wire:model="applicant_loans_loan_two_reason"
                                    ></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Statement of Purpose (Please
                                specify)</label>
                            <div class="col-lg-6">
                                <textarea rows="10" cols="30" class="form-control" wire:model="applicant_loans_loan_three_reason"
                                    ></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endif



{{-- STEP 15 --}}
@if ($currentStep == 15)
{{-- <input type="hidden" name="scholarshipId" wire:model="scholarshipId"> --}}

    {{-- card start --}}
    <div class="card shadow-sm mb-15" style="width:90%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
               15. Applicant Educational Records
            </h3>
            {{-- If there is no record entered in form and next is pressed then this will be shown avlue setted from increaseStep function --}}
            @if (session()->has('alert'))
                <div class="alert alert-danger" style="height: 50px!important; margin-top: 10px;">
                    <p>
                        {{ session('alert') }}
                    </p>
                </div>
            @endif
        </div>
        <div class="card-body">
            <div class="card">
            <div class="card-body">

                <div class="mb-15">

                    <table class="table">
                        <thead>

                            <tr>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">S#</label>
                                    </div>
                                </th>
                                <th width="17%">
                                    <div class="form-group mb-10">
                                        <label class="form-label">Level of study</label>
                                    </div>
                                </th>
                                <th width="17%">
                                    <div class="form-group mb-10">
                                        <label class="form-label">Name of institute</label>
                                    </div>
                                </th>
                                <th width="15%">
                                    <div class="form-group mb-10">
                                        <label class="form-label">Per month fees</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">From</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <label class="form-label">To</label>
                                    </div>
                                </th>
                                <th width="10%">
                                    <div class="form-group mb-10">
                                        <label class="form-label">GPA/Division</label>
                                    </div>
                                </th>
                                <th width="10%">
                                    <div class="form-group mb-10">
                                        <label class="form-label">%/CGPA</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="form-group mb-10">
                                        <a href="#!" title="Add"
                                            class="btn btn-sm btn-success font-weight-bold"
                                            style="    padding: 9px 13px 10px!important;
                                                border-radius: 50%;
                                                width: 38px;"
                                            wire:click="addEducationRecord()"><i
                                                class="fa-regular fa-plus"></i></a>
                                    </div>
                                </th>
                            </tr>
                        </thead>


                        <tbody>

                            @foreach ($applicant_education_records as $array)
                                <tr>
                                    <td>
                                        <div class="form-group mt-5">
                                            <h5>{{ $loop->index + 1 }}.</h5>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                                <select
                                                    class="form-control @error('applicant_education_records.' . $loop->index . '.level_of_study') @enderror"
                                                    wire:model="applicant_education_records.{{ $loop->index }}.level_of_study"
                                                    wire:key="applicant-education-records-level-of-study-{{ $loop->index }}">
                                                        <option value="">Select level</option>
                                                        <option value="Bachelors">Bachelors</option>
                                                        <option value="Intermediate">Intermediate</option>
                                                        <option value="Secondary Education">Secondary Education</option>
                                                </select>
                                                <span class="text-danger">
                                                    @error('applicant_education_records.' . $loop->index .
                                                        '.level_of_study')
                                                        {{ str_replace("applicant education records.{$loop->index}.level of study field", 'level of study', $message) }}
                                                        @enderror
                                                </span>
                                            
                                            </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                            <input 
                                                type="text"
                                                class="form-control @error('applicant_education_records.' . $loop->index . '.institution_name') @enderror"
                                                wire:model="applicant_education_records.{{ $loop->index }}.institution_name"
                                                wire:key="applicant-education-records-institution-name-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_education_records.' . $loop->index .
                                                    '.institution_name')
                                                    {{ str_replace("applicant education records.{$loop->index}.institution name field", 'institution name', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                            <input 
                                                type="text"
                                                class="form-control @error('applicant_education_records.' . $loop->index . '.per_month_fees') @enderror"
                                                wire:model="applicant_education_records.{{ $loop->index }}.per_month_fees"
                                                wire:key="applicant-education-records-per-month-fees-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_education_records.' . $loop->index .
                                                    '.per_month_fees')
                                                    {{ str_replace("applicant education records.{$loop->index}.per month fees field", 'per month fees', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                            <input 
                                                type="date"
                                                class="form-control @error('applicant_education_records.' . $loop->index . '.from_date') @enderror"
                                                wire:model="applicant_education_records.{{ $loop->index }}.from_date"
                                                wire:key="applicant-education-records-from-date-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_education_records.' . $loop->index .
                                                    '.from_date')
                                                    {{ str_replace("applicant education records.{$loop->index}.from date field", 'start date', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                            <input 
                                                type="date"
                                                class="form-control @error('applicant_education_records.' . $loop->index . '.to_date') @enderror"
                                                wire:model="applicant_education_records.{{ $loop->index }}.to_date"
                                                wire:key="applicant-education-records-to-date-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_education_records.' . $loop->index .
                                                    '.to_date')
                                                    {{ str_replace("applicant education records.{$loop->index}.to date field", 'ending date', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                            <input 
                                                type="text"
                                                class="form-control @error('applicant_education_records.' . $loop->index . '.gpa_division') @enderror"
                                                wire:model="applicant_education_records.{{ $loop->index }}.gpa_division"
                                                wire:key="applicant-education-records-gpa-division-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_education_records.' . $loop->index .
                                                    '.gpa_division')
                                                    {{ str_replace("applicant education records.{$loop->index}.gpa division field", 'GPA/Division', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                            <input 
                                                type="text"
                                                class="form-control @error('applicant_education_records.' . $loop->index . '.cgpa_percentage') @enderror"
                                                wire:model="applicant_education_records.{{ $loop->index }}.cgpa_percentage"
                                                wire:key="applicant-education-records-cgpa-percentage-{{ $loop->index }}" />
                                            <span class="text-danger">
                                                @error('applicant_education_records.' . $loop->index .
                                                    '.cgpa_percentage')
                                                    {{ str_replace("applicant education records.{$loop->index}.cgpa percentage field", '%/CGPA', $message) }}
                                                @enderror
                                            </span>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="form-group mb-10">
                                            <a href="#!" title="Remove"
                                                class="btn btn-sm btn-danger"
                                                style="
                                                padding: 8px 13px 7px!important;
                                                border-radius: 50%;
                                                width: 35px;
                                                font-size: 12.1px;"
                                                wire:click="removeEducationRecord({{ $loop->index }})"><i
                                                    class="fa-regular fa-x"></i></a>
                                        </div>
                                    </td>

                                </tr>

                                @endforeach

                        </tbody>

                    </table>
                                

                    {{-- <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Level of study</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Name of institute</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">Per month fees</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <label class="form-label">From</label>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <select wire:model="applicant_education_records_level_of_study"
                                    id="applicant_education_records_level_of_study" class="form-control" required>
                                    <option value="">Select level</option>
                                    <option value="Bachelors">Bachelors</option>
                                    <option value="Intermediate">Intermediate</option>
                                    <option value="Secondary Education">Secondary Education</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_education_records_institution_name"
                                    id="applicant_education_records_institution_name" required />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="text" class="form-control"
                                    wire:model="applicant_education_records_per_month_fees"
                                    id="applicant_education_records_per_month_fees" required />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-10">
                                <input type="date" class="form-control"
                                    wire:model="applicant_education_records_from_date"
                                    id="applicant_education_records_from_date" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">To</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">CGPA/Division</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <label class="form-label">%/CGPA</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <input type="date" class="form-control"
                                        wire:model="applicant_education_records_to_date"
                                        id="applicant_education_records_to_date" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_education_records_gpa_division"
                                        id="applicant_education_records_gpa_division" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-10">
                                    <input type="text" class="form-control"
                                        wire:model="applicant_education_records_cgpa_percentage"
                                        id="applicant_education_records_cgpa_percentage" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" onclick="saveEducationDataInTable();"
                        class="btn btn-success">Save</button> --}}
                </div>


                {{-- Table to show saved data --}}
                {{-- <div class="table-responsive">
                    <table class="table table-bordered" id="data-table-9">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th>Level of study</th>
                                <th>Name of institute</th>
                                <th>Per month fees</th>
                                <th>From</th>
                                <th>To</th>
                                <th>CGPA/Division</th>
                                <th>%/CGPA</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div> --}}
            </div>
        </div>
    </div>
@endif



{{-- STEP 16 --}}
@if ($currentStep == 16)
{{-- <input type="hidden" name="scholarshipId" wire:model="scholarshipId"> --}}

    {{-- card start --}}
    <div class="card shadow-sm mb-15" style="width:85%; margin: auto;">
        <div class="card-header">
            <h3 class="card-title">
                16. Other Scholarships
            </h3>
            {{-- <div class="card-toolbar">
            <a href="{{route('application.showFamilyMemberDetailsForm', $scholarship)}}"class="btn btn-sm btn-light">
                Skip & Continue
            </a>
        </div> --}}
            {{-- Show only if all the three reasons are empty --}}
            @if(empty($applicant_other_scholarships_institution_name) && empty($applicant_other_scholarships_name) && empty($applicant_other_scholarships_total_amount) && empty($applicant_other_scholarships_total_period) && empty($applicant_other_scholarships_class_level_granted) && empty($applicant_other_scholarships_purpose))
            <div class="card-toolbar">
                <button onclick="return confirm('Are you sure you want to submit form?') || event.stopImmediatePropagation()" wire:click="skipStep()" class="btn btn-sm btn-light">
                    Skip & Continue
                </button>
            </div>
            @endif
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <h4 class="font-size-lg text-dark font-weight-bold mb-20">Have you got any other scholarship? If
                        yes
                        then fill this form otherwise skip & continue!</h4>

                    <div class="mb-15">
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Name of institution</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control"
                                    wire:model="applicant_other_scholarships_institution_name" />
                                    <span class="text-danger">
                                        @error('applicant_other_scholarships_institution_name')
                                            {{ str_replace("applicant other scholarships institution name", 'institution name', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Scholarship Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control"
                                    wire:model="applicant_other_scholarships_name" />
                                    <span class="text-danger">
                                        @error('applicant_other_scholarships_name')
                                            {{ str_replace("applicant other scholarships name", 'scholarship name', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Total Scholarship Amount</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control"
                                    wire:model="applicant_other_scholarships_total_amount" />
                                    <span class="text-danger">
                                        @error('applicant_other_scholarships_total_amount')
                                            {{ str_replace("applicant other scholarships total amount", 'total amount', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Total Scholarship Period</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control"
                                    wire:model="applicant_other_scholarships_total_period" />
                                    <span class="text-danger">
                                        @error('applicant_other_scholarships_total_period')
                                            {{ str_replace("applicant other scholarships total period", 'total period/duration', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Class/Level at which scholarship was
                                granted</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control"
                                    wire:model="applicant_other_scholarships_class_level_granted" />
                                    <span class="text-danger">
                                        @error('applicant_other_scholarships_class_level_granted')
                                            {{ str_replace("applicant other scholarships class level granted", 'class/level', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-10">
                            <label class="col-lg-3 col-form-label">Statement of Purpose (Please specify)</label>
                            <div class="col-lg-6">
                                <textarea rows="10" cols="30" class="form-control" wire:model="applicant_other_scholarships_purpose"
                                    placeholder="Enter few lines about loan taken here"></textarea>
                                    <span class="text-danger">
                                        @error('applicant_other_scholarships_purpose')
                                            {{ str_replace("applicant other scholarships purpose", 'purpose of scholarship', $message) }}
                                        @enderror
                                    </span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
@endif


<div class="card-footer">
    <div class="action-buttons d-flex justify-content-between align-items-center bg-white pt-2 pb-2">
        @if ($currentStep == 1)
            <div></div>
        @endif

        @if (
            $currentStep == 2 ||
                $currentStep == 3 ||
                $currentStep == 4 ||
                $currentStep == 5 ||
                $currentStep == 6 ||
                $currentStep == 7 ||
                $currentStep == 8 ||
                $currentStep == 9 ||
                $currentStep == 10 ||
                $currentStep == 11 ||
                $currentStep == 12 ||
                $currentStep == 13 ||
                $currentStep == 14 ||
                $currentStep == 15 || 
                $currentStep == 16)
            <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
        @endif

        {{-- Show progress bar here --}}
        
            <div class="progress" style="height: 20px; width: 60%; font-size: 12.5px;
            font-weight: 500; color:darkgoldenrod">
                <div class="progress-bar" role="progressbar" style="height: 100%; width: 100%;" aria-valuenow="{{$this->progressValue}}" aria-valuemin="0" aria-valuemax="100">
                    {{$this->progressValue}}% completed
                </div>
            </div>
        {{-- <div style="text-align: center">{{$this->progressValue}}%</div> --}}

        @if (
            $currentStep == 1 ||
                $currentStep == 2 ||
                $currentStep == 3 ||
                $currentStep == 4 ||
                $currentStep == 5 ||
                $currentStep == 6 ||
                $currentStep == 7 ||
                $currentStep == 8 ||
                $currentStep == 9 ||
                $currentStep == 10 ||
                $currentStep == 11 ||
                $currentStep == 12 ||
                $currentStep == 13 ||
                $currentStep == 14 ||
                $currentStep == 15)
                {{-- <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next from {{$this->currentStep}}</button> --}}

                {{-- If on 5th step form now --}}
                @if($currentStep==5)
                
                    {{-- New row is present in the form then show next --}}
                    @if(!empty($applicant_family_members_currently_studying))
                        <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
                    @else
                        {{-- Not show next button i.e. hidden --}}
                        <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()" style="visibility: hidden;">Next</button>
                    @endif
                    
                {{-- Not 5th step form--}}

                {{-- If on 8th step form now --}}
                @elseif($currentStep==8)
                    {{-- New row is present in the form then show next --}}
                    @if(!empty($applicant_asset_monthly_incomes))
                        <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
                    @else
                        {{-- Not show next button i.e. hidden --}}
                        <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()" style="visibility: hidden;">Next</button>
                    @endif

                {{-- Not 8th step form--}}
                
                {{-- If on 11th step form now --}}
                @elseif($currentStep==11)
                    {{-- New row is present in the form then show next --}}
                    @if(!empty($applicant_other_assets))
                        <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
                    @else
                        {{-- Not show next button i.e. hidden --}}
                        <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()" style="visibility: hidden;">Next</button>
                    @endif

                {{-- Not 11th step form--}}

                {{-- If on 12th step form now --}}
                @elseif($currentStep==12)
                    {{-- New row is present in the form then show next --}}
                    @if(!empty($applicant_owned_plots))
                        <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
                    @else
                        {{-- Not show next button i.e. hidden --}}
                        <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()" style="visibility: hidden;">Next</button>
                    @endif

                {{-- Not 12th step form--}}

                {{-- If on 13th step form now --}}
                @elseif($currentStep==13)
                    {{-- New row is present in the form then show next --}}
                    @if(!empty($applicant_worth_assets))
                        <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
                    @else
                        {{-- Not show next button i.e. hidden --}}
                        <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()" style="visibility: hidden;">Next</button>
                    @endif

                {{-- Not 13th step form--}}
                @else
                    <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
                @endif
            
            @endif


            @if ($currentStep == 16)
                <div style="text-align: right"></div>
            {{-- <button type="submit" wire:click.prevent="submitForm({{$this->ID}})" class="btn btn-md btn-primary">Submit</button>  --}}
            {{-- <button type="submit" wire:click.prevent="submitForm" class="btn btn-md btn-primary">Submit</button>  --}}
            {{-- <button wire:click="increaseStep" class="btn btn-md btn-primary">Submit</button>  --}}
            {{-- <button onclick="confirmAndIncreaseStep();" class="btn btn-md btn-primary">Submit</button>  --}}
            {{-- <button type="submit" wire:click.prevent="confirmAndIncreaseStep" class="btn btn-md btn-primary">Submit</button> --}}
            {{-- <button id="submitButton" type="submit" wire:click.prevent="increaseStep" class="btn btn-md btn-primary">Submit</button> --}}
            <button onclick="return confirm('Are you sure you want to submit the form?') || event.stopImmediatePropagation()" wire:click="increaseStep" class="btn btn-md btn-primary">Submit</button>
            {{-- <button type="submit" onclick="return confirm('Are you sure you want to submit form?')" class="btn btn-md btn-primary">Submit</button> --}}
            {{-- After submitting validate the current form and show a screen where all the fields data is shown --}}
            {{-- onclick="confirmAndIncreaseStep()" --}}
            @endif
    </div>
</div>
</div>


{{-- </form> --}}


</div>
