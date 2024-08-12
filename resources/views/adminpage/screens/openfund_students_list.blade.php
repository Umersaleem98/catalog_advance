<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    @include('adminpage.css')

    <style>
        body, table, th, td {
            color: #000; /* Black color */
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>
<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
        NProgress.configure({ showSpinner: false });
        NProgress.start();
    </script>

    <div id="toaster"></div>
    <div class="wrapper">
        @include('adminpage.sidebar')
        <div class="page-wrapper">
            @include('adminpage.header')

            <div class="content-wrapper">
                <div class="content">

                    <form action="{{ url('open_fundlist') }}" method="POST" enctype="multipart/form-data" class="mt-2">
                        @csrf
                        <div class="form-group">
                            <label for="file">Upload Excel File:</label>
                            <input type="file" name="file" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Import</button>
                    </form>

                    <div class="row">
                        <div class="col-12">
                            <div class="card ">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h2>Open funds students list </h2>

                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="productsTable" class="table table-hover table-product table-sm" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Qalam ID</th>
                                                    <th>Name</th>
                                                    <th>Father Name</th>
                                                    <th>Institution</th>
                                                    <th>Discipline</th>
                                                    <th>Contact No</th>
                                                    <th>Scholarship Name</th>
                                                    <th>Donor Name</th>
                                                    <th>Province</th>
                                                    <th>Domicile</th>                                                    <th>Gender</th>
                                                    <th>Program</th>
                                                    <th>Degree</th>
                                                    <th>Year of Admission</th>
                                                    <th>Father Status</th>
                                                    <th>Father Profession</th>
                                                    <th>Father Profession Category</th>
                                                    <th>organization</th>
                                                    <th>Category</th>
                                                    <th>Category</th>
                                                    <th>Monthly Income</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($openfundsstudents as $item)
                                                <tr>
                                                    <td>{{ $item->qalam_id }}</td>
                                                    <td>{{ $item->student_name }}</td>
                                                    <td>{{ $item->father_name }}</td>
                                                    <td>{{ $item->institutions }}</td>
                                                    <td>{{ $item->discipline }}</td>
                                                    <td>{{ $item->contact_no }}</td>
                                                    {{-- <td>{{ $item->home_address }}</td> --}}
                                                    <td>{{ $item->scholarship_name }}</td>
                                                    <td>{{ $item->nust_trust_fund_donor_name }}</td>
                                                    <td>{{ $item->province }}</td>
                                                    <td>{{ $item->domicile }}</td>
                                                    <td>{{ $item->city }}</td>
                                                    <td>{{ $item->gender }}</td>
                                                    <td>{{ $item->program }}</td>
                                                    <td>{{ $item->degree }}</td>
                                                    <td>{{ $item->year_of_admission }}</td>
                                                    <td>{{ $item->father_status }}</td>
                                                    <td>{{ $item->father_profession }}</td>
                                                    <td>{{ $item->father_profession_category }}</td>
                                                    <td>{{ $item->organization }}</td>
                                                    <td>{{ $item->category }}</td>
                                                    <td>{{ $item->monthly_income }}</td>
                                                    {{-- <td>{{ $item->statement_of_purpose }}</td> --}}
                                                    {{-- <td>{{ $item->remarks }}</td> --}}
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Pagination -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('adminpage.script')
</body>
</html>
