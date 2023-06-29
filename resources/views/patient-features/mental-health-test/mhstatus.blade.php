@extends('patient-features.layout.main-user')
@section('contents')
<link rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
      type="text/css" />
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
        type="text/javascript">
</script>
<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq section-bg mt-5">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Your Mental Health Status</p>
        </div>

        @foreach ($mh as $mhs)
        <div class="d-flex justify-content-center">
        <table class="table table-bordered w-50 mb-4" style="background-color: white;">
          <thead class="table-secondary">
            <th class="text-center" colspan="2">Mental Health Test Result</th>
          </thead>
          <tbody>
            <?php
            $date = $mhs->created_at;
            ?>
          <th>Test Date Taken</th>
          <td>{{ substr($date,0,10) }}</td>
          </tbody>
          <tbody>
          <th>Depression Score</th>
          <td>{{ $mhs->depScore }}</td>
          </tbody>
          <tbody>
          <th>Depression Interpretation</th>
          <td>{{ $mhs->depResult }}</td>
          </tbody>
          <tbody>
          <th>Anxiety Score</th>
          <td>{{ $mhs->anxScore }}</td>
          </tbody>
          <tbody>
          <th>Anxiety Interpretation</th>
          <td>{{ $mhs->anxResult }}</td>
          </tbody>
          <tbody>
          <th>Stress Score</th>
          <td>{{ $mhs->strScore }}</td>
          </tbody>
          <tbody>
          <th>Stress Interpretation</th>
          <td>{{ $mhs->strResult }}</td>
          </tbody>
        </table>
        </div>

        <input type="hidden" class="depScore" value="{{ $mhs->depScore }}">
        <input type="hidden" class="anxScore" value="{{ $mhs->anxScore }}">
        <input type="hidden" class="strScore" value="{{ $mhs->strScore }}">
        <input type="hidden" class="date" value="{{ $mhs->created_at }}">
        <!-- <input type="hidden" class="date" value="{{ substr($date,0,10) }}"> -->
        @endforeach

        <div class="mt-5">
            <canvas id="myChart"></canvas>
        </div>

        <div class="d-flex justify-content-center mx-4 mt-5 mb-2 mb-lg-3">
            <button type="button" onclick="location.href='/mental-health'" class="btn btn-primary btn-lg me-3">Back to Dashboard</button>
          </div>
        </div>
    </section><!-- End F.A.Q Section -->

    <script>
    let depScore = document.querySelectorAll(".depScore");
    let anxScore = document.querySelectorAll(".anxScore");
    let strScore = document.querySelectorAll(".strScore");
    let date = document.querySelectorAll(".date");
    
    let ctx = document.getElementById("myChart").getContext("2d");
    let myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [
                date[0].value,
                date[1].value,
                date[2].value,
            ],
            datasets: [
                {
                    label: "Depression",
                    data: [depScore[0].value, depScore[1].value, depScore[2].value],
                    backgroundColor: "rgba(70, 30, 77, 0.63)",
                },
                {
                    label: "Anxiety",
                    data: [anxScore[0].value, anxScore[1].value, anxScore[2].value],
                    backgroundColor: "rgba(32, 108, 230, 0.6)",
                },
                {
                    label: "Stress",
                    data: [strScore[0].value, strScore[1].value, strScore[2].value],
                    backgroundColor: "rgba(163, 10, 12, 0.6)",
                },
            ],
        },
    });
    </script>
@endsection