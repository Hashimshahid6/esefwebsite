@include('components.header')

<body>
    <!-- ======= Header ======= -->
    @include('components.navbar')
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="" class="about">
            <div class="container" style="margin-top: 80px !important">
                <h3>Khyber Pakhtunkhwa Non Formal Education Overall Summary</h3>
                <table class="table table-bordered">
                    <!-- Table header -->
                    <thead class="bg-success text-white">
                        <tr>
                            <th>Centers</th>
                            <th>Teachers</th>
                            <th>Learners</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        <tr>
                            <td>3,826</td>
                            <td>5,576</td>
                            <td>246,873</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container mt-4">
                <h3>Gender-wise Centers</h3>
                <table class="table table-bordered">
                    <!-- Table header -->
                    <thead class="thead-dark">
                        <tr>
                            <th>Male</th>
                            <th>Female</th>
                            <th>Co-Edu</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        <tr>
                            <td>66</td>
                            <td>189</td>
                            <td>3,571</td>
                            <td>3,826</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container mt-4">
                <h3>Gender & Level-wise Centers Total</h3>
                <table class="table table-bordered">
                    <!-- Table header -->
                    <thead class="thead-dark">
                        <tr>
                            <th>Level</th>
                            <th>Male</th>
                            <th>Female</th>
                            <th>Co-Edu</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        <tr>
                            <td>Primary</td>
                            <td>51</td>
                            <td>99</td>
                            <td>3,571</td>
                            <td>3,721</td>
                        </tr>
                        <tr>
                            <td>Middle</td>
                            <td>9</td>
                            <td>90</td>
                            <td>6</td>
                            <td>105</td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <th>60</th>
                            <th>189</th>
                            <th>3,577</th>
                            <th>3,826</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container mt-4">
                <h3>Teachers</h3>
                <table class="table table-bordered">
                    <!-- Table header -->
                    <thead class="thead-dark">
                        <tr>
                            <th>Level</th>
                            <th>Male</th>
                            <th>Female</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        <tr>
                            <td>Primary</td>
                            <td>650</td>
                            <td>4,767</td>
                            <td>5,417</td>
                        </tr>
                        <tr>
                            <td>Middle</td>
                            <td>16</td>
                            <td>143</td>
                            <td>159</td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <th>666</th>
                            <th>4,910</th>
                            <th>5,576</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container mt-4">
                <h3>Enrollment</h3>
                <table class="table table-bordered">
                    <!-- Table header -->
                    <thead class="thead-dark">
                        <tr>
                            <th>Boys</th>
                            <th>Girls</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        <tr>
                            <td>95,555</td>
                            <td>151,318</td>
                            <td>246,873</td>
                        </tr>
                        <!-- Add more rows if needed -->
                    </tbody>
                </table>
            </div>
            <div class="container mt-4">
                <h3>Enrollment - Class & Gender-wise</h3>
                <table class="table table-bordered">
                    <!-- Table header -->
                    <thead class="thead-dark">
                        <tr>
                            <th>Classes</th>
                            <th>Boys</th>
                            <th>Girls</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        <tr>
                            <td>Package-A</td>
                            <td>2,061</td>
                            <td>3,119</td>
                            <td>5,180</td>
                        </tr>
                        <tr>
                            <td>Package-B</td>
                            <td>488</td>
                            <td>476</td>
                            <td>964</td>
                        </tr>
                        <tr>
                            <td>Package-C</td>
                            <td>470</td>
                            <td>784</td>
                            <td>1,254</td>
                        </tr>
                        <tr>
                            <td>Package-D</td>
                            <td>444</td>
                            <td>3,705</td>
                            <td>4,149</td>
                        </tr>
                        <tr>
                            <td>Package-E</td>
                            <td>33</td>
                            <td>473</td>
                            <td>506</td>
                        </tr>
                        <tr>
                            <td>Playgroup</td>
                            <td>4,465</td>
                            <td>4,794</td>
                            <td>9,259</td>
                        </tr>
                        <tr>
                            <td>Nursery</td>
                            <td>21,196</td>
                            <td>24,502</td>
                            <td>45,563</td>
                        </tr>
                        <tr>
                            <td>Katchi/Prep</td>
                            <td>21,435</td>
                            <td>29,027</td>
                            <td>50,462</td>
                        </tr>
                        <tr>
                            <td>One</td>
                            <td>16,326</td>
                            <td>25,746</td>
                            <td>42,072</td>
                        </tr>
                        <tr>
                            <td>Two</td>
                            <td>11,806</td>
                            <td>20,905</td>
                            <td>32,711</td>
                        </tr>
                        <tr>
                            <td>Three</td>
                            <td>7,719</td>
                            <td>14,837</td>
                            <td>22,556</td>
                        </tr>
                        <tr>
                            <td>Four</td>
                            <td>5,599</td>
                            <td>12,424</td>
                            <td>18,023</td>
                        </tr>
                        <tr>
                            <td>Five</td>
                            <td>3,554</td>
                            <td>10,179</td>
                            <td>13,733</td>
                        </tr>
                        <tr>
                            <td>Six</td>
                            <td>33</td>
                            <td>191</td>
                            <td>224</td>
                        </tr>
                        <tr>
                            <td>Seven</td>
                            <td>12</td>
                            <td>53</td>
                            <td>65</td>
                        </tr>
                        <tr>
                            <td>Eight</td>
                            <td>6</td>
                            <td>11</td>
                            <td>17</td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <th>95,512</th>
                            <th>151,226</th>
                            <th>246,873</th>
                        </tr>
                        <!-- Add more rows if needed -->
                    </tbody>
                </table>
            </div>
            <div class="container mt-4 table-responsive">
                <h3>Organization-wise - Centers, Teachers, and Enrollment</h3>
                <table class="table table-bordered">
                    <!-- Table header -->
                    <thead class="thead-dark">
                        <tr>
                            <th>Province/Area</th>
                            <th>Organization</th>
                            <th>Centers</th>
                            <th>Teachers</th>
                            <th>Boys</th>
                            <th>Girls</th>
                            <th>Total Learners</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        <tr>
                            <td>KP</td>
                            <td>Elementary & Secondary Education Foundation (ESEF) / Girls Community Schools</td>
                            <td>3,546</td>
                            <td>5,208</td>
                            <td>92,059</td>
                            <td>142,761</td>
                            <td>234,820</td>
                        </tr>
                        <tr>
                            <td>KP</td>
                            <td>Ghazali Education Trust</td>
                            <td>2</td>
                            <td>2</td>
                            <td>33</td>
                            <td>41</td>
                            <td>74</td>
                        </tr>
                        <tr>
                            <td>KP</td>
                            <td>HUJRA VSO</td>
                            <td>30</td>
                            <td>30</td>
                            <td>427</td>
                            <td>722</td>
                            <td>1,149</td>
                        </tr>
                        <tr>
                            <td>KP</td>
                            <td>IDEA/ EQAE UNHCR Funded Project-1</td>
                            <td>17</td>
                            <td>17</td>
                            <td>0</td>
                            <td>381</td>
                            <td>381</td>
                        </tr>
                        <tr>
                            <td>KP</td>
                            <td>IDEA/ EQAE UNHCR Funded Project-2</td>
                            <td>18</td>
                            <td>36</td>
                            <td>0</td>
                            <td>410</td>
                            <td>410</td>
                        </tr>
                        <tr>
                            <td>KP</td>
                            <td>National Commission for Human Development</td>
                            <td>29</td>
                            <td>29</td>
                            <td>1,370</td>
                            <td>550</td>
                            <td>1,920</td>
                        </tr>
                        <tr>
                            <td>KP</td>
                            <td>National Integrated Development Association (NIDA) Pakistan</td>
                            <td>30</td>
                            <td>30</td>
                            <td>444</td>
                            <td>770</td>
                            <td>1,214</td>
                        </tr>
                        <tr>
                            <td>KP</td>
                            <td>National Integrated Development Association (NIDA) Pakistan District Dir Upper.</td>
                            <td>30</td>
                            <td>60</td>
                            <td>0</td>
                            <td>2,003</td>
                            <td>2,003</td>
                        </tr>
                        <tr>
                            <td>KP</td>
                            <td>Pakistan Alliance for Girls Education</td>
                            <td>20</td>
                            <td>20</td>
                            <td>276</td>
                            <td>578</td>
                            <td>854</td>
                        </tr>
                        <tr>
                            <td>KP</td>
                            <td>Peace and Development Organization (PADO)/ Non Formal Education (ALP)</td>
                            <td>54</td>
                            <td>54</td>
                            <td>0</td>
                            <td>1,930</td>
                            <td>1,930</td>
                        </tr>
                        <tr>
                            <td>KP</td>
                            <td>Relief International /Promoting Afghan Children's Education</td>
                            <td>42</td>
                            <td>82</td>
                            <td>824</td>
                            <td>862</td>
                            <td>1,686</td>
                        </tr>
                        <tr>
                            <td>KP</td>
                            <td>Sustainable Peace & Development Organization-SPADO NFE for Afghan Refugees in
                                transitional settlements</td>
                            <td>8</td>
                            <td>8</td>
                            <td>122</td>
                            <td>310</td>
                            <td>432</td>
                        </tr>
                        <tr>
                            <td></td>
                            <th>Total</th>
                            <th>3,826</th>
                            <th>5,576</th>
                            <th>95,555</th>
                            <th>151,318</th>
                            <th>246,873</th>
                        </tr>
                        <!-- Add more rows if needed -->
                    </tbody>
                </table>
            </div>
        </section><!-- End About Section -->
    </main><!-- End #main -->

    <!-- ======= Footer Section ======= -->
    @include('components.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('components.scripts')
</body>

</html>
