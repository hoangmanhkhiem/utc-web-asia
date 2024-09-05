<?php
/*
 Template Name: Program
 */
get_header();

?>
<div class="container">
  <div id="main">
    <div class="main-content">
      <div class="content">
        <div class="p-3 content-right">
          <div class="title-main">
            <h2><span>Master
                Programme</span> in Traffic Safety Engineering</h2>
          </div>
          <div class="content-des">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php
                the_content();
                endwhile;
            endif;

            ?>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
      <div class="p-3 program">
        <h4>STRUCTURE OF MASTER’S PROGRAM</h4>
        <p>
          The Master Program in Transport Safety Engineering
          consists of four semesters of education
        </p>
        <p>Duration of study: 2 years</p>
        <p>Credit: 63 credits</p>
        <p>
          Degree: Degree of Master in Transport Safety
          Engineering Scheme:
        </p>
        <table>
          <tbody>
            <tr>
              <th>No.</th>
              <th>Knowledge Blocks</th>
              <th>Number of Courses</th>
              <th>Credit</th>
            </tr>
            <tr>
              <th>1</th>
              <th class="text-start">General Knowledge</th>
              <th>01</th>
              <th>03</th>
            </tr>
            <tr>
              <th>2</th>
              <th class="text-start">
                Fundamental knowledge and specialized knowledge
              </th>
              <th>14</th>
              <th>48</th>
            </tr>
            <tr>
              <td></td>
              <td>Compulsory courses</td>
              <td>11</td>
              <td>39</td>
            </tr>
            <tr>
              <td></td>
              <td>Elective courses</td>
              <td>03</td>
              <td>09</td>
            </tr>
            <tr>
              <th>3</th>
              <th class="text-start">Thesis</th>
              <th>01</th>
              <th>12</th>
            </tr>
            <tr>
              <td></td>
              <th>Total</th>
              <th>16</th>
              <th>63</th>
            </tr>
          </tbody>
        </table>
        <h4>
          COURSE STRUCTURE
        </h4>
        <table border="1">
          <tbody>
            <tr>
              <th>No.</th>
              <th>Course name </th>
              <th>Course code</th>
              <th>Credits</th>
            </tr>
            <tr>
              <td></td>
              <th>SEMESTER 1</th>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>1</td>
              <td>
                Philosophy
              </td>
              <td>PS0.001.3</td>
              <td>3</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Research Methodology</td>
              <td>ET1.M01.3</td>
              <td>3</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Statistical and Data Analysis for Traffic Safety</td>
              <td>ET1.M02.3 </td>
              <td>3</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Traffic Safety and Human Behaviour</td>
              <td>ET1.M03.3</td>
              <td>3</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Traffic Modelling, Simulation and Safety</td>
              <td>ET1.M04.3</td>
              <td>3</td>
            </tr>
            <tr>
              <td></td>
              <th>Total</th>
              <td></td>
              <th>15</th>
            </tr>
            <!-- table2 -->
            <tr>
              <td></td>
              <th>SEMESTER 2</th>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>6</td>
              <td>Pre and Post Accidents Studies</td>
              <td>ET1.M05.3</td>
              <td>3</td>
            </tr>
            <tr>
              <td>7</td>
              <td>Traffic Safety Management</td>
              <td>ET1.M06.3</td>
              <td>3</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Safety Audit and Traffic Risk Analysis</td>
              <td>ET1.M07.3</td>
              <td>3</td>
            </tr>
            <tr>
              <td></td>
              <td>
                <p style="font-weight: 600;">Choose 1 out of 2 courses (3
                  credits)</p>
              </td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td rowspan="2">9</td>
              <td>Automotive Safety </td>
              <td>ET1.ME08.3</td>
              <td rowspan="2">3</td>
            </tr>
            <tr>
              <td class="text-start">Vehicle Collision Dynamics</td>
              <td style="border-right: 1px solid #808080;text-align: center;">ET1.ME09.3</td>
            </tr>
            <tr>
              <td></td>
              <td>
                <p style="font-weight: 600;">Choose 1 out of 2 courses (3
                  credits)</p>
              </td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td rowspan="2">10</td>
              <td>Geographical Information Systems (GIS) and Traffic Safety </td>
              <td>ET1.ME10.3</td>
              <td rowspan="2">3</td>
            </tr>
            <tr>
              <td class="text-start">Sustainable Transport Systems</td>
              <td style="border-right: 1px solid #808080;text-align: center;">ET1.ME11.3</td>
            </tr>
            <tr>
              <td></td>
              <th>Total</th>
              <td></td>
              <th>15</th>
            </tr>
            <tr>
              <td></td>
              <th>SEMESTER 3</th>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>11</td>
              <td>Intelligent Transport Systems and Traffic Safety</td>
              <td>ET1.M12.3</td>
              <td>3</td>
            </tr>
            <tr>
              <td>12</td>
              <td>Vehicle Inspections</td>
              <td>ET1.M13.3</td>
              <td>3</td>
            </tr>
            <tr>
              <td></td>
              <td>
                <p style="font-weight: 600;">Choose 1 out of 2 courses (3
                  credits)</p>
              </td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td rowspan="2">13</td>
              <td>Urban Transport Planning and Safety</td>
              <td>ET1.ME14.3</td>
              <td>3</td>
            </tr>
            <tr>
              <td class="text-start !important">Road Safety Design Project </td>
              <td class="text-center">ET1.ME15.3</td>
              <td>3</td>
            </tr>
            <tr>
              <td>14</td>
              <td class="text-start !important">Road Safety Design Project</td>
              <td class="text-center">ET1.M16.3</td>
              <td>6</td>
            </tr>
            <tr>
              <td></td>
              <th>Total</th>
              <td></td>
              <th>15</th>
            </tr>
            <tr>
              <td></td>
              <th>SEMESTER 4</th>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>15</td>
              <td>Road Safety Management Project</td>
              <td>ET1.M17.3</td>
              <td>6</td>
            </tr>
            <tr>
              <td>16</td>
              <td>Master Thesis Work</td>
              <td>ET1.M18.12</td>
              <td>12</td>
            </tr>
            <tr>
              <td></td>
              <th>Total</th>
              <td></td>
              <th>18</th>
            </tr>
            <tr style="background-color: #fbe4d5;">
              <td></td>
              <th>Total credits </th>
              <td></td>
              <th>63</th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
<?php get_footer(); ?>