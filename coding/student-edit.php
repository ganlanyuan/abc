<?php include 'part/head.php'; ?>
<body class="database with-main-nav">
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>
<?php include 'part/main-nav.php'; ?>

<div class="container">
  <div class="panel">
    <div class="panel-head inline-group clearfix">
      <h4 class="heading4 inline-cell"><span class="small">StudentID:</span> 1004</h4>
      <h4 class="heading4 inline-cell"><span class="small">Student Name:</span> Henry Bergen</h4>
      <div class="inline-cell">
        <a href="" class="button button-info">View Printable Page</a>
        <a href="" class="button button-info">Degree Progress Report</a>
        <a href="" class="button button-warning">Reset Password</a>
        <a href="" class="button button-danger">Delete</a>
      </div>
    </div>
    <div class="panel-pure">
      <form action="">
        <ol class="form-aligned">
          <li>
            <span class="control-label">&nbsp;</span>
            <div class="control-field">
              <img src="assets/img/avatar.png" alt="" width="140" height="140"><br />
              <!-- Avatar <br /> -->
              <?php include 'part/upload-base.php'; ?>
            </div>
          </li>
          <li>
            <label for="" class="control-label">First Name</label>
            <div class="control-field"><input type="text"></div>
          </li>
          <li>
            <label for="" class="control-label">Middle Name</label>
            <div class="control-field"><input type="text"></div>
          </li>
          <li class="required">
            <label for="" class="control-label">Last Name</label>
            <div class="control-field">
              <input type="text" data-notempty-message="The Last Name is Required">
              <small class="help-inline">The Last Name is Required</small>
            </div>
          </li>
          <li>
            <label for="" class="control-label">Login E-mail</label>
            <div class="control-field"><input type="email"></div>
          </li>
          <li>
            <label for="" class="control-label">Status</label>
            <div class="control-field">
              <span class="select-wrap">
                <select id="status" name="status" data-bv-notempty-message="The status is required">
                  <option value="">-- Select a Status --</option>
                  <option value="1" selected="">Active</option><option value="2">Inactive</option><option value="3">Graduated</option>
                </select>
                <span class="abc-caret-down"></span>
              </span>
            </div>
          </li>
          <li>
            <label for="" class="control-label">Program</label>
            <div class="control-field">
              <span class="select-wrap">
                <select id="program" name="program">
                  <option value="">-- Select a Program --</option>
                  <option value="3">Bachelor of Arts (B.A.)</option><option value="4">Masters of Arts (M.A.)</option><option value="5">Master of Divinity (M.Div.)</option><option value="6">Doctor of Ministry (D.Min.)</option>
                </select>
                <span class="abc-caret-down"></span>
              </span>
            </div>
          </li>
          <li>
            <label for="" class="control-label">Major</label>
            <div class="control-field">
              <span class="select-wrap">
                <select id="major" name="major">
                  <option value="">-- Select a Major --</option>
                  <option value="5">Theology</option><option value="6">Music</option><option value="7">Business</option>
                </select>
                <span class="abc-caret-down"></span>
              </span>
            </div>
          </li>
          <li>
            <label for="" class="control-label">Birthdate</label>
            <div class="control-field">
              <span class="select-wrap">
                <select id="year">
                  <option value="Year:">Year:</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option>
                </select>
                <span class="abc-caret-down"></span>
              </span>
            </div>
            <div class="control-field">
              <span class="select-wrap">
                <select id="month">
                  <option value="0">Month:</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
                </select>
                <span class="abc-caret-down"></span>
              </span>
            </div>
            <div class="control-field">
              <span class="select-wrap">
                <select id="day">
                  <option>Day:</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                </select>
                <span class="abc-caret-down"></span>
              </span>
            </div>
          </li>
          <li>
            <label for="" class="control-label">Gender</label>
            <div class="control-field">
              <span class="select-wrap">
                <select id="gender" name="gender">
                  <option value="">-- Select a Gender --</option>
                  <option value="1">Female</option><option value="2">Male</option>
                </select>
                <span class="abc-caret-down"></span>
              </span>
            </div>
          </li>
          <li>
            <label for="" class="control-label">Marital status</label>
            <div class="control-field">
              <span class="select-wrap">
                <select id="maritalStatus" name="maritalStatus">
                  <option value="">-- select a status --</option>
                  <option value="1">Single</option><option value="2">Married</option>
                </select>
                <span class="abc-caret-down"></span>
              </span>
            </div>
          </li>
          <li>
            <label for="" class="control-label">Phone 1</label>
            <div class="control-field"><input type="tel"></div>
          </li>
          <li>
            <label for="" class="control-label">Phone 2</label>
            <div class="control-field"><input type="tel"></div>
          </li>
          <li>
            <label for="" class="control-label">Alternate E-mail</label>
            <div class="control-field"><input type="email"></div>
          </li>
          <li>
            <label for="" class="control-label">Home Address</label>
            <div class="control-field"><input type="text"></div>
          </li>
          <li>
            <label for="" class="control-label">Mailing Address</label>
            <div class="control-field"><input type="text"></div>
          </li>
          <li>
            <label for="" class="control-label">Emergency Contact</label>
            <div class="control-field"><input type="text"></div>
          </li>
          <li>
            <label for="" class="control-label">Additional Data</label>
            <div class="control-field"><textarea name="" id="" cols="50" rows="7"></textarea></div>
          </li>
          <li>
            <span class="control-label">&nbsp;</span>
            <div class="control-field"><a href="" class="button button-secondary">Save change</a></div>
          </li>
        </ol>
      </form>
    </div>
  </div>
</div>
<?php include 'part/footer.php'; ?>
</body>
</html>