@extends('layouts.back.master')

@section('title',  'Reports | कोविड-१९ |'.config('app.name'))

@section('contents')
    <div class="row">
        <div class="col-sm-12  container">
            <div class="container-fluid">
                <div class="card ">
                    <div class="card-block ">
                        <div class="card-header">
                            <strong>Reports</strong>
                        </div>
                        <div class="container-fluid">
                            <div class="row m-t-20" id="Selector">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="row">
                                                <div class="col-4 col-sm-12">
                                                    Provience:
                                                </div>
                                                <div class="col-8 col-sm-12">
                                                    <select name="Provience" id="Provience" class="form-control">
                                                        <option selected>Select Provience</option>
                                                        @foreach($province as $Key => $provinces)
                                                            <option
                                                                value="{{ $provinces->state=='province_1' ? 'Province No 1' : ($provinces->state=='province_2' ? 'Province No 2' : ($provinces->state=='province_3_bagmati' ? 'Bagmati Pradesh' : ($provinces->state=='province_4_gandaki' ? 'Gandaki Pradesh' : ($provinces->state=='province_5' ? 'Province No 5' : ($provinces->state=='province_6_karnali' ? 'Karnali Pradesh' : ($provinces->state=='province_7_sudurpachim' ? 'Sudurpashchim Pradesh' : 'Abroad') )))))  }}">{{ $provinces->state=='province_1' ? 'Province No 1' : ($provinces->state=='province_2' ? 'Province No 2' : ($provinces->state=='province_3_bagmati' ? 'Bagmati Pradesh' : ($provinces->state=='province_4_gandaki' ? 'Gandaki Pradesh' : ($provinces->state=='province_5' ? 'Province No 5' : ($provinces->state=='province_6_karnali' ? 'Karnali Pradesh' : ($provinces->state=='province_7_sudurpachim' ? 'Sudurpashchim Pradesh' : 'Abroad') )))))  }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="row">
                                                <div class="col-4 col-sm-12">
                                                    Result:
                                                </div>
                                                <div class="col-8 col-sm-12">
                                                    <select name="Result" id="Result" class="form-control">
                                                        <option selected>Select Result</option>
                                                        <option value="Normal">Normal</option>
                                                        <option value="Medium">Medium</option>
                                                        <option value="High">High</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="row">
                                                <div class="col-4 col-sm-12">
                                                    <a onclick="printDiv('prinTingReport')" href="#"
                                                       class="btn btn-success btn-sm"
                                                       style="color:white;">
                                                        <i class="fa fa-file-pdf bg-danger"></i> Save / <i
                                                            class="fa fa-print"></i> Print
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div id="prinTingReport" class="d-none">
                            <div class="card-body  m-t-30">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>
                                            <Strong>Date Generated: </Strong> &nbsp;{{ date('d M Y') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <span>
                                        <img src="{{ asset('images/icon/logo.png') }}" alt="Tinjure tea factory"
                                             style="min-height:fixed; min-width:20%; max-height:fixed;max-width:20%;"/>
                                    </span>
                                    </div>

                                    <div class="col-sm-12">
                                        <br/>
                                        <h2 style="color:green; line-height:40px;">Covid-19 Report</h2>
                                        <p>Rastraya yoba sangh</p>
                                    </div>
                                </div>
                                <hr>
                                <table id="Report_TablePrint" class="table table-bordered table-hover" width="100%">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th style="text-align: center;">SN</th>
                                        <th style="text-align: center;">Report of</th>
                                        <th style="text-align: center;">Latitude</th>
                                        <th style="text-align: center;">Longitude</th>
                                        <th style="text-align: center;">Province</th>
                                        <th style="text-align: center;">Gender</th>
                                        <th style="text-align: center;">Age</th>
                                        <th style="text-align: center;">Temperature</th>
                                        <th style="text-align: center;">No contact with anyone with symptom</th>
                                        <th style="text-align: center;">History of travel in affected area in last 14
                                            days
                                        </th>
                                        <th style="text-align: center;">Close contact with confirmed covid in last 14
                                            days
                                        </th>
                                        <th style="text-align: center;">Result</th>
                                        <th style="text-align: center;">Percent</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key => $datas)
                                        <tr>
                                            <td style="text-align: center;">{{ $key+1 }}</td>
                                            <td style="text-align: center;">{{ ucfirst($datas->report_of) }}</td>
                                            <td style="text-align: center;">{{ number_format((float)$datas['lat'], 3) }}</td>
                                            <td style="text-align: center;">{{ number_format((float)$datas['lng'], 3) }}</td>
                                            <td style="text-align: center;">{{ $datas->state=='province_1' ? 'Province No 1' : ($datas->state=='province_2' ? 'Province No 2' : ($datas->state=='province_3_bagmati' ? 'Bagmati Pradesh' : ($datas->state=='province_4_gandaki' ? 'Gandaki Pradesh' : ($datas->state=='province_5' ? 'Province No 5' : ($datas->state=='province_6_karnali' ? 'Karnali Pradesh' : ($datas->state=='province_7_sudurpachim' ? 'Sudurpashchim Pradesh' : 'Abroad') )))))  }}</td>
                                            <td style="text-align: center;">{{ ucfirst($datas->gender) }}</td>
                                            <td style="text-align: center;">{{ $datas->age }}</td>
                                            <td style="text-align: center;">{{ ucfirst(str_replace('_',' ', $datas->temperature)) }}</td>
                                            <td style="text-align: center;">{{ $datas->no_contact_with_anyone_with_symptom=='1' ? 'Yes' : 'No' }}</td>
                                            <td style="text-align: center;">{{ $datas->history_of_travel_in_affected_geographical_area_in_last_14Days=='1' ? 'Yes' : 'No' }}</td>
                                            <td style="text-align: center;">{{ $datas->close_contact_With_Confirmed_covid_in_Last_14Days=='1' ? 'Yes' : 'No' }}</td>
                                            <td style="text-align: center;">{{ $datas['score']<=33.99 ? 'Normal' : ($datas['score']>=34 && $datas['score']<=66.99 ? 'Medium' : 'High') }}</td>
                                            <td style="text-align: center;">{{ number_format((float)$datas['score'], 2) .'%' }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="display">
                            <div class="card-body  m-t-30">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>
                                            <Strong>Date Generated: </Strong> &nbsp;{{ date('d M Y') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <span>
                                        <img src="{{ asset('images/icon/logo.png') }}" alt="Tinjure tea factory"
                                             style="min-height:fixed; min-width:20%; max-height:fixed;max-width:20%;"/>
                                    </span>
                                    </div>

                                    <div class="col-sm-12">
                                        <br/>
                                        <h2 style="color:green; line-height:40px;">Covid-19 Report</h2>
                                        <p>Rastraya yoba sangh</p>
                                    </div>
                                </div>
                                <hr>
                                <table id="Report_Table" class="table table-bordered table-hover table-responsive"
                                       width="100%">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th style="text-align: center;">SN</th>
                                        <th style="text-align: center;">Report of</th>
                                        <th style="text-align: center;">Latitude</th>
                                        <th style="text-align: center;">Longitude</th>
                                        <th style="text-align: center;">Province</th>
                                        <th style="text-align: center;">Gender</th>
                                        <th style="text-align: center;">Age</th>
                                        <th style="text-align: center;">Temperature</th>
                                        <th style="text-align: center;">No contact with anyone with symptom</th>
                                        <th style="text-align: center;">History of travel in affected area in last 14
                                            days
                                        </th>
                                        <th style="text-align: center;">Close contact with confirmed covid in last 14
                                            days
                                        </th>
                                        <th style="text-align: center;">Result</th>
                                        <th style="text-align: center;">Percent</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key => $datas)
                                        <tr>
                                            <td style="text-align: center;">{{ $key+1 }}</td>
                                            <td style="text-align: center;">{{ ucfirst($datas->report_of) }}</td>
                                            <td style="text-align: center;">{{ number_format((float)$datas['lat'], 3) }}</td>
                                            <td style="text-align: center;">{{ number_format((float)$datas['lng'], 3) }}</td>
                                            <td style="text-align: center;">{{ $datas->state=='province_1' ? 'Province No 1' : ($datas->state=='province_2' ? 'Province No 2' : ($datas->state=='province_3_bagmati' ? 'Bagmati Pradesh' : ($datas->state=='province_4_gandaki' ? 'Gandaki Pradesh' : ($datas->state=='province_5' ? 'Province No 5' : ($datas->state=='province_6_karnali' ? 'Karnali Pradesh' : ($datas->state=='province_7_sudurpachim' ? 'Sudurpashchim Pradesh' : 'Abroad') )))))  }}</td>
                                            <td style="text-align: center;">{{ ucfirst($datas->gender) }}</td>
                                            <td style="text-align: center;">{{ $datas->age }}</td>
                                            <td style="text-align: center;">{{ ucfirst(str_replace('_',' ', $datas->temperature)) }}</td>
                                            <td style="text-align: center;">{{ $datas->no_contact_with_anyone_with_symptom=='1' ? 'Yes' : 'No' }}</td>
                                            <td style="text-align: center;">{{ $datas->history_of_travel_in_affected_geographical_area_in_last_14Days=='1' ? 'Yes' : 'No' }}</td>
                                            <td style="text-align: center;">{{ $datas->close_contact_With_Confirmed_covid_in_Last_14Days=='1' ? 'Yes' : 'No' }}</td>
                                            <td style="text-align: center;">{{ $datas['score']<=33.99 ? 'Normal' : ($datas['score']>=34 && $datas['score']<=66.99 ? 'Medium' : 'High') }}</td>
                                            <td style="text-align: center;">{{ number_format((float)$datas['score'], 2) .'%' }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
    </div>
@endsection
@section('scripts')
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }

        $.fn.dataTable.ext.search.push(
            function (settings, data, dataIndex) {

                if (settings.nTable.id === '#Report_Table') {
                    return true;
                }

                var Provience = $('#Provience').val();
                var Result = $('#Result').val();

                var result = data[11];
                var proviences = data[4];

                if ((isNaN(Result) && Result == result) ||
                    (isNaN(Provience) && Provience == proviences)
                ) {
                    return true;
                }

                return false;
            }
        );

        $(document).ready(function () {
            var table = $('#Report_Table').DataTable({
                "bInfo": false,
                lengthMenu: [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "All"]
                ]
            });
            var table2 = $('#Report_TablePrint').DataTable({
                "searching": true,
                "bPaginate": false,
                "bLengthChange": false,
                "bFilter": true,
                "bInfo": false,
                "bAutoWidth": false
            });

            // Event listener to the two range filtering inputs to redraw on input
            $('#Provience,#Result').change(function () {
                table.draw();
                table2.draw();
            });
        });
    </script>
@endsection
