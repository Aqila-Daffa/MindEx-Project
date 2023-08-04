@extends('patient-features.layout.main-user')
@section('contents')
<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq section-bg mt-5">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Mental Health Test Questions</p>
        </div>

        <div class="mb-4" data-aos="fade-up">
          <h3>Indicator for the scale</h3>
          <h5 class="mt-3">0 = Strongly Disagree &emsp; 1 = Disagree &emsp; 2 = Agree &emsp; 3 = Strongly Agree</h5>
        </div>

        <!-- <div class="mb-5" data-aos="fade-up">
          <h3>Indicator for the scale</h3>
          <h5>0 &nbsp=&nbsp Strongly Disagree</h5> 
          <h5>1 &nbsp&nbsp=&nbsp Disagree</h5>
          <h5>2 &nbsp=&nbsp Agree</h5>
          <h5>3 &nbsp=&nbsp Strongly Agree</h5>
        </div> -->

        <form action="/mental-health-result" method="post">
          @csrf
        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <h6>1.&nbsp; I feel that I get angry over trivial things.</h6>
              <div id="faq-list-1" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
               <input type="radio" id="0q1" name="q1" value="0" required>
               <label for="0q1">0</label>&emsp;
               <input type="radio" id="1q1" name="q1" value="1">
               <label for="1q1">1</label>&emsp;
               <input type="radio" id="2q1" name="q1" value="2">
               <label for="2q1">2</label>&emsp;
               <input type="radio" id="3q1" name="q1" value="3">
               <label for="3q1">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <h6>2.&nbsp; I feel that my lips are often dry. </h6>
              <div id="faq-list-2" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q2" name="q2" value="0" required>
               <label for="0q2">0</label>&emsp;
               <input type="radio" id="1q2" name="q2" value="1">
               <label for="1q2">1</label>&emsp;
               <input type="radio" id="2q2" name="q2" value="2">
               <label for="2q2">2</label>&emsp;
               <input type="radio" id="3q2" name="q2" value="3">
               <label for="3q2">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
             <h6>3.&nbsp; I couldn't feel any positive feelings at all. </h6>
              <div id="faq-list-3" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q3" name="q3" value="0" required>
               <label for="0q3">0</label>&emsp;
               <input type="radio" id="1q3" name="q3" value="1">
               <label for="1q3">1</label>&emsp;
               <input type="radio" id="2q3" name="q3" value="2">
               <label for="2q3">2</label>&emsp;
               <input type="radio" id="3q3" name="q3" value="3">
               <label for="3q3">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <h6>4.&nbsp; I have difficulty breathing (for example: often panting or unable to breathe even though I did no physical activity before). </h6>
              <div id="faq-list-4" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q4" name="q4" value="0" required>
               <label for="0q4">0</label>&emsp;
               <input type="radio" id="1q4" name="q4" value="1">
               <label for="1q4">1</label>&emsp;
               <input type="radio" id="2q4" name="q4" value="2">
               <label for="2q4">2</label>&emsp;
               <input type="radio" id="3q4" name="q4" value="3">
               <label for="3q4">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
             <h6>5.&nbsp; I don't seem to have the strength to do an activity anymore. </h6>
              <div id="faq-list-5" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q5" name="q5" value="0" required>
               <label for="0q5">0</label>&emsp;
               <input type="radio" id="1q5" name="q5" value="1">
               <label for="1q5">1</label>&emsp;
               <input type="radio" id="2q5" name="q5" value="2">
               <label for="2q5">2</label>&emsp;
               <input type="radio" id="3q5" name="q5" value="3">
               <label for="3q5">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <h6>6.&nbsp; I tend to overreact to situations. </h6>
              <div id="faq-list-6" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q6" name="q6" value="0" required>
               <label for="0q6">0</label>&emsp;
               <input type="radio" id="1q6" name="q6" value="1">
               <label for="1q6">1</label>&emsp;
               <input type="radio" id="2q6" name="q6" value="2">
               <label for="2q6">2</label>&emsp;
               <input type="radio" id="3q6" name="q6" value="3">
               <label for="3q6">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
             <h6>7.&nbsp; I feel unsteady (for example, my legs feel like they are going to fall off). </h6>
              <div id="faq-list-7" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q7" name="q7" value="0" required>
               <label for="0q7">0</label>&emsp;
               <input type="radio" id="1q7" name="q7" value="1">
               <label for="1q7">1</label>&emsp;
               <input type="radio" id="2q7" name="q7" value="2">
               <label for="2q7">2</label>&emsp;
               <input type="radio" id="3q7" name="q7" value="3">
               <label for="3q7">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <h6>8.&nbsp; I find it hard to relax. </h6>
              <div id="faq-list-8" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q8" name="q8" value="0" required>
               <label for="0q8">0</label>&emsp;
               <input type="radio" id="1q8" name="q8" value="1">
               <label for="1q8">1</label>&emsp;
               <input type="radio" id="2q8" name="q8" value="2">
               <label for="2q8">2</label>&emsp;
               <input type="radio" id="3q8" name="q8" value="3">
               <label for="3q8">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <h6>9.&nbsp; I found myself in a situation that made me feel very anxious and I would feel very relieved when this was all over. </h6>
              <div id="faq-list-9" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q9" name="q9" value="0" required>
               <label for="0q9">0</label>&emsp;
               <input type="radio" id="1q9" name="q9" value="1">
               <label for="1q9">1</label>&emsp;
               <input type="radio" id="2q9" name="q9" value="2">
               <label for="2q9">2</label>&emsp;
               <input type="radio" id="3q9" name="q9" value="3">
               <label for="3q9">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
             <h6>10.&nbsp; I feel that there is nothing to look forward to in the future. </h6>
              <div id="faq-list-10" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q10" name="q10" value="0" required>
               <label for="0q10">0</label>&emsp;
               <input type="radio" id="1q10" name="q10" value="1">
               <label for="1q10">1</label>&emsp;
               <input type="radio" id="2q10" name="q10" value="2">
               <label for="2q10">2</label>&emsp;
               <input type="radio" id="3q10" name="q10" value="3">
               <label for="3q10">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <h6>11.&nbsp; I find myself easily irritated. </h6>
              <div id="faq-list-11" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q11" name="q11" value="0" required>
               <label for="0q11">0</label>&emsp;
               <input type="radio" id="1q11" name="q11" value="1">
               <label for="1q11">1</label>&emsp;
               <input type="radio" id="2q11" name="q11" value="2">
               <label for="2q11">2</label>&emsp;
               <input type="radio" id="3q11" name="q11" value="3">
               <label for="3q11">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <h6>12.&nbsp; I feel like I've wasted a lot of energy worrying. </h6>
              <div id="faq-list-12" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q12" name="q12" value="0" required>
               <label for="0q12">0</label>&emsp;
               <input type="radio" id="1q12" name="q12" value="1">
               <label for="1q12">1</label>&emsp;
               <input type="radio" id="2q12" name="q12" value="2">
               <label for="2q12">2</label>&emsp;
               <input type="radio" id="3q12" name="q12" value="3">
               <label for="3q12">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>13.&nbsp; I feel sad and depressed. </h6>
              <div id="faq-list-13" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q13" name="q13" value="0" required>
               <label for="0q13">0</label>&emsp;
               <input type="radio" id="1q13" name="q13" value="1">
               <label for="1q13">1</label>&emsp;
               <input type="radio" id="2q13" name="q13" value="2">
               <label for="2q13">2</label>&emsp;
               <input type="radio" id="3q13" name="q13" value="3">
               <label for="3q13">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>14.&nbsp; I find myself getting impatient when I encounter delays (eg: traffic jams, waiting for something). </h6>
              <div id="faq-list-14" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q14" name="q14" value="0" required>
               <label for="0q14">0</label>&emsp;
               <input type="radio" id="1q14" name="q14" value="1">
               <label for="1q14">1</label>&emsp;
               <input type="radio" id="2q14" name="q14" value="2">
               <label for="2q14">2</label>&emsp;
               <input type="radio" id="3q14" name="q14" value="3">
               <label for="3q14">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>15.&nbsp; I feel weak like I'm going to pass out. </h6>
              <div id="faq-list-15" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q15" name="q15" value="0" required>
               <label for="0q15">0</label>&emsp;
               <input type="radio" id="1q15" name="q15" value="1">
               <label for="1q15">1</label>&emsp;
               <input type="radio" id="2q15" name="q15" value="2">
               <label for="2q15">2</label>&emsp;
               <input type="radio" id="3q15" name="q15" value="3">
               <label for="3q15">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>16.&nbsp; I feel I have lost interest in everything.</h6>
              <div id="faq-list-16" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q16" name="q16" value="0" required>
               <label for="0q16">0</label>&emsp;
               <input type="radio" id="1q16" name="q16" value="1">
               <label for="1q16">1</label>&emsp;
               <input type="radio" id="2q16" name="q16" value="2">
               <label for="2q16">2</label>&emsp;
               <input type="radio" id="3q16" name="q16" value="3">
               <label for="3q16">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>17.&nbsp; I feel that I am worthless as a human being. </h6>
              <div id="faq-list-17" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q17" name="q17" value="0" required>
               <label for="0q17">0</label>&emsp;
               <input type="radio" id="1q17" name="q17" value="1">
               <label for="1q17">1</label>&emsp;
               <input type="radio" id="2q17" name="q17" value="2">
               <label for="2q17">2</label>&emsp;
               <input type="radio" id="3q17" name="q17" value="3">
               <label for="3q17">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>18.&nbsp; I feel that I am easily offended. </h6>
              <div id="faq-list-18" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q18" name="q18" value="0" required>
               <label for="0q18">0</label>&emsp;
               <input type="radio" id="1q18" name="q18" value="1">
               <label for="1q18">1</label>&emsp;
               <input type="radio" id="2q18" name="q18" value="2">
               <label for="2q18">2</label>&emsp;
               <input type="radio" id="3q18" name="q18" value="3">
               <label for="3q18">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>19.&nbsp; I sweat excessively (eg sweaty hands), even though the temperature is not hot or I haven't done any physical activity before. </h6>
              <div id="faq-list-19" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q19" name="q19" value="0" required>
               <label for="0q19">0</label>&emsp;
               <input type="radio" id="1q19" name="q19" value="1">
               <label for="1q19">1</label>&emsp;
               <input type="radio" id="2q19" name="q19" value="2">
               <label for="2q19">2</label>&emsp;
               <input type="radio" id="3q19" name="q19" value="3">
               <label for="3q19">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>20.&nbsp; I feel scared for no apparent reason </h6>
              <div id="faq-list-20" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q20" name="q20" value="0" required>
               <label for="0q20">0</label>&emsp;
               <input type="radio" id="1q20" name="q20" value="1">
               <label for="1q20">1</label>&emsp;
               <input type="radio" id="2q20" name="q20" value="2">
               <label for="2q20">2</label>&emsp;
               <input type="radio" id="3q20" name="q20" value="3">
               <label for="3q20">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>21.&nbsp; I feel that life is not worthwhile. </h6>
              <div id="faq-list-21" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q21" name="q21" value="0" required>
               <label for="0q21">0</label>&emsp;
               <input type="radio" id="1q21" name="q21" value="1">
               <label for="1q21">1</label>&emsp;
               <input type="radio" id="2q21" name="q21" value="2">
               <label for="2q21">2</label>&emsp;
               <input type="radio" id="3q21" name="q21" value="3">
               <label for="3q21">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>22.&nbsp; I find it hard to rest. </h6>
              <div id="faq-list-22" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q22" name="q22" value="0" required>
               <label for="0q22">0</label>&emsp;
               <input type="radio" id="1q22" name="q22" value="1">
               <label for="1q22">1</label>&emsp;
               <input type="radio" id="2q22" name="q22" value="2">
               <label for="2q22">2</label>&emsp;
               <input type="radio" id="3q22" name="q22" value="3">
               <label for="3q22">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>23.&nbsp; I have difficulty swallowing. </h6>
              <div id="faq-list-23" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q23" name="q23" value="0" required>
               <label for="0q23">0</label>&emsp;
               <input type="radio" id="1q23" name="q23" value="1">
               <label for="1q23">1</label>&emsp;
               <input type="radio" id="2q23" name="q23" value="2">
               <label for="2q23">2</label>&emsp;
               <input type="radio" id="3q23" name="q23" value="3">
               <label for="3q23">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>24.&nbsp; I cannot feel pleasure from the things I do. </h6>
              <div id="faq-list-24" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q24" name="q24" value="0" required>
               <label for="0q24">0</label>&emsp;
               <input type="radio" id="1q24" name="q24" value="1">
               <label for="1q24">1</label>&emsp;
               <input type="radio" id="2q24" name="q24" value="2">
               <label for="2q24">2</label>&emsp;
               <input type="radio" id="3q24" name="q24" value="3">
               <label for="3q24">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>25.&nbsp; I am aware of heart activity, even though I have not been physically active (eg feeling my heart rate increase or decrease). </h6>
              <div id="faq-list-25" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q25" name="q25" value="0" required>
               <label for="0q25">0</label>&emsp;
               <input type="radio" id="1q25" name="q25" value="1">
               <label for="1q25">1</label>&emsp;
               <input type="radio" id="2q25" name="q25" value="2">
               <label for="2q25">2</label>&emsp;
               <input type="radio" id="3q25" name="q25" value="3">
               <label for="3q25">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>26.&nbsp; I feel hopeless and sad. </h6>
              <div id="faq-list-26" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q26" name="q26" value="0" required>
               <label for="0q26">0</label>&emsp;
               <input type="radio" id="1q26" name="q26" value="1">
               <label for="1q26">1</label>&emsp;
               <input type="radio" id="2q26" name="q26" value="2">
               <label for="2q26">2</label>&emsp;
               <input type="radio" id="3q26" name="q26" value="3">
               <label for="3q26">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>27.&nbsp; I feel that I am very irritable. </h6>
              <div id="faq-list-27" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q27" name="q27" value="0" required>
               <label for="0q27">0</label>&emsp;
               <input type="radio" id="1q27" name="q27" value="1">
               <label for="1q27">1</label>&emsp;
               <input type="radio" id="2q27" name="q27" value="2">
               <label for="2q27">2</label>&emsp;
               <input type="radio" id="3q27" name="q27" value="3">
               <label for="3q27">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>28.&nbsp; I feel I'm almost panicking. </h6>
              <div id="faq-list-28" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q28" name="q28" value="0" required>
               <label for="0q28">0</label>&emsp;
               <input type="radio" id="1q28" name="q28" value="1">
               <label for="1q28">1</label>&emsp;
               <input type="radio" id="2q28" name="q28" value="2">
               <label for="2q28">2</label>&emsp;
               <input type="radio" id="3q28" name="q28" value="3">
               <label for="3q28">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>29.&nbsp; I find it hard to calm down after something has upset me. </h6>
              <div id="faq-list-29" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q29" name="q29" value="0" required>
               <label for="0q29">0</label>&emsp;
               <input type="radio" id="1q29" name="q29" value="1">
               <label for="1q29">1</label>&emsp;
               <input type="radio" id="2q29" name="q29" value="2">
               <label for="2q29">2</label>&emsp;
               <input type="radio" id="3q29" name="q29" value="3">
               <label for="3q29">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>30.&nbsp; I fear that I will be 'bogged down' by trivial tasks that I am not used to doing. </h6>
              <div id="faq-list-30" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q30" name="q30" value="0" required>
               <label for="0q30">0</label>&emsp;
               <input type="radio" id="1q30" name="q30" value="1">
               <label for="1q30">1</label>&emsp;
               <input type="radio" id="2q30" name="q30" value="2">
               <label for="2q30">2</label>&emsp;
               <input type="radio" id="3q30" name="q30" value="3">
               <label for="3q30">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>31.&nbsp; I'm Not Enthusiastic In Any Case. </h6>
              <div id="faq-list-31" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q31" name="q31" value="0" required>
               <label for="0q31">0</label>&emsp;
               <input type="radio" id="1q31" name="q31" value="1">
               <label for="1q31">1</label>&emsp;
               <input type="radio" id="2q31" name="q31" value="2">
               <label for="2q31">2</label>&emsp;
               <input type="radio" id="3q31" name="q31" value="3">
               <label for="3q31">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>32.&nbsp; I have a hard time being patient with interruptions in what I am doing. </h6>
              <div id="faq-list-32" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q32" name="q32" value="0" required>
               <label for="0q32">0</label>&emsp;
               <input type="radio" id="1q32" name="q32" value="1">
               <label for="1q32">1</label>&emsp;
               <input type="radio" id="2q32" name="q32" value="2">
               <label for="2q32">2</label>&emsp;
               <input type="radio" id="3q32" name="q32" value="3">
               <label for="3q32">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>33.&nbsp; I'm feeling restless. </h6>
              <div id="faq-list-33" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q33" name="q33" value="0" required>
               <label for="0q33">0</label>&emsp;
               <input type="radio" id="1q33" name="q33" value="1">
               <label for="1q33">1</label>&emsp;
               <input type="radio" id="2q33" name="q33" value="2">
               <label for="2q33">2</label>&emsp;
               <input type="radio" id="3q33" name="q33" value="3">
               <label for="3q33">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>34.&nbsp; I feel that I am worthless. </h6>
              <div id="faq-list-34" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q34" name="q34" value="0" required>
               <label for="0q34">0</label>&emsp;
               <input type="radio" id="1q34" name="q34" value="1">
               <label for="1q34">1</label>&emsp;
               <input type="radio" id="2q34" name="q34" value="2">
               <label for="2q34">2</label>&emsp;
               <input type="radio" id="3q34" name="q34" value="3">
               <label for="3q34">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>35.&nbsp; I can't afford anything to stop me from finishing what I'm doing. </h6>
              <div id="faq-list-35" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q35" name="q35" value="0" required>
               <label for="0q35">0</label>&emsp;
               <input type="radio" id="1q35" name="q35" value="1">
               <label for="1q35">1</label>&emsp;
               <input type="radio" id="2q35" name="q35" value="2">
               <label for="2q35">2</label>&emsp;
               <input type="radio" id="3q35" name="q35" value="3">
               <label for="3q35">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>36.&nbsp; I feel very scared. </h6>
              <div id="faq-list-36" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q36" name="q36" value="0" required>
               <label for="0q36">0</label>&emsp;
               <input type="radio" id="1q36" name="q36" value="1">
               <label for="1q36">1</label>&emsp;
               <input type="radio" id="2q36" name="q36" value="2">
               <label for="2q36">2</label>&emsp;
               <input type="radio" id="3q36" name="q36" value="3">
               <label for="3q36">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>37.&nbsp; I see no hope for the future. </h6>
              <div id="faq-list-37" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q37" name="q37" value="0" required>
               <label for="0q37">0</label>&emsp;
               <input type="radio" id="1q37" name="q37" value="1">
               <label for="1q37">1</label>&emsp;
               <input type="radio" id="2q37" name="q37" value="2">
               <label for="2q37">2</label>&emsp;
               <input type="radio" id="3q37" name="q37" value="3">
               <label for="3q37">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>38.&nbsp; I feel that life is meaningless. </h6>
              <div id="faq-list-38" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q38" name="q38" value="0" required>
               <label for="0q38">0</label>&emsp;
               <input type="radio" id="1q38" name="q38" value="1">
               <label for="1q38">1</label>&emsp;
               <input type="radio" id="2q38" name="q38" value="2">
               <label for="2q38">2</label>&emsp;
               <input type="radio" id="3q38" name="q38" value="3">
               <label for="3q38">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>39.&nbsp; I Find Myself Anxious Easily. </h6>
              <div id="faq-list-39" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q39" name="q39" value="0" required>
               <label for="0q39">0</label>&emsp;
               <input type="radio" id="1q39" name="q39" value="1">
               <label for="1q39">1</label>&emsp;
               <input type="radio" id="2q39" name="q39" value="2">
               <label for="2q39">2</label>&emsp;
               <input type="radio" id="3q39" name="q39" value="3">
               <label for="3q39">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>40.&nbsp; I feel worried about situations where I might panic and embarrass myself. </h6>
              <div id="faq-list-40" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q40" name="q40" value="0" required>
               <label for="0q40">0</label>&emsp;
               <input type="radio" id="1q40" name="q40" value="1">
               <label for="1q40">1</label>&emsp;
               <input type="radio" id="2q40" name="q40" value="2">
               <label for="2q40">2</label>&emsp;
               <input type="radio" id="3q40" name="q40" value="3">
               <label for="3q40">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>41.&nbsp; I feel shaking (eg: in my hands). </h6>
              <div id="faq-list-41" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q41" name="q41" value="0" required>
               <label for="0q41">0</label>&emsp;
               <input type="radio" id="1q41" name="q41" value="1">
               <label for="1q41">1</label>&emsp;
               <input type="radio" id="2q41" name="q41" value="2">
               <label for="2q41">2</label>&emsp;
               <input type="radio" id="3q41" name="q41" value="3">
               <label for="3q41">3</label>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <h6>42.&nbsp; I find it difficult to increase initiative in doing things. </h6>
              <div id="faq-list-42" class="collapse show mt-4" data-bs-parent=".faq-list">&emsp;
              <input type="radio" id="0q42" name="q42" value="0" required>
               <label for="0q42">0</label>&emsp;
               <input type="radio" id="1q42" name="q42" value="1">
               <label for="1q42">1</label>&emsp;
               <input type="radio" id="2q42" name="q42" value="2">
               <label for="2q42">2</label>&emsp;
               <input type="radio" id="3q42" name="q42" value="3">
               <label for="3q42">3</label>
              </div>
            </li>
          </ul>

          <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
            <button type="button" onclick="location.href='/'" class="btn btn-primary btn-lg me-3">Home</button>
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
          </div>
        </div>
        </form>

      </div>
    </section><!-- End F.A.Q Section -->
@endsection