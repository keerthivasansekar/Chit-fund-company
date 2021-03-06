<style type="text/css">
.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
  margin-top: 2em;
}
 
th {
  color:#fff;;
  background:#2D67A3;
  border-bottom:4px solid #B8B8C0;
  border-right: 1px solid #B8B8C0;
  font-size:23px;
  font-weight: 100;
  padding:10px;
  padding left:40px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
  font-family: 'Yanone Kaffeesatz', serif;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #B8B8C0;
  border-bottom-: 1px solid #B8B8C0;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #B8B8C0;
  border-bottom: 1px solid #B8B8C0;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:5px;
  padding-left: 20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #B8B8C0;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}



</style>
<?php

  require 'conn.inc.php';
  require 'core.inc.php';

  if(!loggedin()){
    header('Location: index.php');
  }

  if(!userlevel(9)){
    header('Location: access_denied.php');
  }

  $query = "select * from account_master";
  $result = mysql_query($query);

  echo "<table  class=table-fill >
  <thead>
  <tr>
  <th class=text-left >Account ID</th>
  <th class=text-left >Account Details</th>
  <th class=text-left >Balance</th>
  </tr>
  </thead>";

  while($row = mysql_fetch_array($result)) {
    echo "<tbody class=table-hover>";
    echo "<tr>";
    echo "<td class=text-left >" . $row['acc_id'] . "</td>";
    echo "<td class=text-left >" . $row['acc_name'] . "</td>";
    echo "<td class=text-left >" . $row['balance'] . "</td>";
    echo "</tr>";
    echo "</tbody>";
  }
echo "</table>";
?>