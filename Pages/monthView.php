<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Academic Schedule</title>
        <!--<script type="text/javascript" src="../Scripts/primary.js"> </script>  -->
        <title>Academic Schedule - Semester View</title>
        <link rel="stylesheet" type="text/css" href="../CSS/overall.css"/>
        <link rel="stylesheet" type="text/css" href="../CSS/monthCSS.css"/>
        <script type = "text/javascript"  src = "../Scripts/date.js" ></script>
    </head>
    <header class="banner" role="banner">
        <div class="bannerLeft">
            <img src="../Images/UR_Logo_Primary_Reverse_White.png" alt="UofR logo" role="img"/>
        </div>
        <div class="bannerMiddle">
            2022-2023 Academic Schedule
            <span class="subtitle">Current Month View</span>
        </div>
        <div class="bannerRight">
            <p id="date">
            </p>
        </div>
    </header>
</br>
    <body class="mainContainer">
        <div class="middle" role="contentinfo">
            <div class="midLeft">
                <label for="year">Academic Year</label>
                <select name="year" id="year" value="2022-2023">
                    <option value="2020-2021">2020-2021</option>
                    <option value="2021-2022">2021-2022</option>
                    <option value="2022-2023" selected="selected">2022-2023</option>
                    <option value="2023-2024">2023-2024</option>
                </select>
            </div>
            <div class="midCenter">
                <label for="month">Month</label>
                <select name="month" id="month" value="February 2023">
                    <option value="April 2022">April 2022</option>
                    <option value="May 2022">May 2022</option>
                    <option value="June 2022">June 2022</option>
                    <option value="July 2022">July 2022</option>
                    <option value="August 2022">August 2022</option>
                    <option value="September 2022">September 2022</option>
                    <option value="October 2022">October 2022</option>
                    <option value="November 2022">November 2022</option>
                    <option value="December 2022">December 2022</option>
                    <option value="January 2023">January 2023</option>
                    <option value="February 2023" selected="selected">February 2023</option>
                    <option value="March 2023">March 2023</option>
                </select>
            </div>
            <form action="./semesterView.html" class="midRight">
                <input type="submit" value="Semester View" class="">
            </form>
            <div class="info" role="main">
                <div class="calendars info">
                    <div class="calendar">
                        <table>
                            <caption>February 2023</caption>
                            <tr>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td class="event" >
                                    20
                                    <span class="eventText" id="eventPopup">
                                        Family Day <span class="seventyfive">(Most University Offices Closed)</span><br/>
                                        Reading Week
                                    </span>
                                </td>
                                <td class="event">
                                    21
                                    <span class="eventText" id="eventPopup">
                                        Reading Week
                                    </span>
                                </td>
                                <td class="event">
                                    22
                                    <span class="eventText" id="eventPopup">
                                        Reading Week
                                    </span>
                                </td>
                                <td class="event">
                                    23
                                    <span class="eventText" id="eventPopup">
                                        Reading Week
                                    </span>
                                </td>
                                <td class="event">
                                    24
                                    <span class="eventText" id="eventPopup">
                                        Reading Week
                                    </span>
                                </td>
                                <td class="event">
                                    25
                                    <span class="eventText" id="eventPopup">
                                        Reading Week
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
        
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bottom">
            <a href="./login.html" class="bottomRight">Admin Login</a>
        </footer>
    </body>
    <script type = "text/javascript"  src = "../Scripts/registrations.js" ></script>
</html>