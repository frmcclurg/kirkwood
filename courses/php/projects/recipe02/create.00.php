<?php
   /**
    * @file create.00.php
    */
?>

<html>
   <head>
      <title>
         Create/Modify Recipe
      </title>

      <link rel="stylesheet"
            type="text/css"
            href="css/common.css">
   </head>

   <body>
      <h1>create.php</h1>

      <!-- Navigation Tabs -->
      <table cellpadding="10"
             cellspacing="5"
             width="100%">
         <tr>
            <th bgcolor="gray"
                style="color: #ffffff;"
                width="15%">
               <a href="search.php"
                  class="tabs">Search/Delete</a>
            </th>
            <th bgcolor="#D3D3D3"
                width="15%">
               Create/Modify
            </th>
            <th height="20">
               &nbsp;
            </th>
         </tr>
      </table>

      <img src="images/pixels/ccccff.png"
           height="4"
           width="100%">

      <br><br>

      <form action="create.php"
            method="GET">
         <table width="100%">
            <tr>
               <td>

                  <table border="1"
                         cellspacing="0"
                         cellpadding="5"
                         width="100%">
                     <tr bgcolor="#ffe1ff">
                        <td>
                           Title:
                           <input type="text"
                                  name="title"
                                  size="30"
                                  value="">
                        </td>
                        <td align="left">
                           Category:
                           <select name="category">
                              <option value="0">
                              </option>

                              <option value="1">
                                 Dessert
                              </option>

                              <option value="2">
                                 Salid
                              </option>

                              <option value="3">
                                 Beverage
                              </option>
                           </select>
                        </td>
                     </tr>

                     <tr bgcolor="#e0ffff">
                        <td colspan="2">
                           Contents: <br>
                           <textarea
                              name="content"
                              rows="10"
                              cols="37"
                              style="width: 100%;"></textarea>
                        </td>
                     </tr>
                  </table>

               </td>
            </tr>

            <tr>
               <td>
                  <hr>
               </td>
            </tr>

            <tr>
               <td>
                  <table width="100%"
                         cellpadding="10">
                     <tr>
                        <td width="20%">
                           &nbsp;
                        </td>
                        <td align="center"
                            width="20%">
                           <input type="submit"
                                  name="submit"
                                  value="Create">
                        </td>
                        <td width="20%">
                           &nbsp;
                        </td>
                        <td align="center"
                            width="20%">
                           <input type="submit"
                                  name="submit"
                                  value="Modify">
                        </td>
                        <td width="20%">
                           &nbsp;
                        </td>
                     </tr>
                  </table>
               </td>
            </tr>
         </table>

      </form>

   </body>
</html>
