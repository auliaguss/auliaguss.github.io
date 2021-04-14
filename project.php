<?php
$conn = new mysqli("localhost", "root", "", "axioo");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = mysqli_query($conn,"SELECT * FROM projects");

while($row = mysqli_fetch_array($result))
{
    $hasil += 
    "<span class='project'> \n
        <div class='foto'> \n
            <div class='img'>
                <img src='".$row['img_utama']."'/>
            </div>
            <div class='navteks'>
                <div class='judul'>".$row['nama']."</div>
                ".$row['contributor_date']."
            </div>
        </div>
        <div class='teks'>
            <img src='assets/img/webresep2.png'/>
            <div class='judul'>Concept</div>
            <div class='subteks'>".$row['concept']."</div>
            <div class='judul'>What it do?</div>
            <div class='subteks'>".$row['feature']."</div>
            <div class='judul'>Technologies and Language</div>
            <div class='subteks'>".$row['tech_stack']."</div>
        </div>
        </span>
        ";
    //<span class='project'>
//     <div class='foto'>
//         <div class='img'>
//           <img src='assets/img/webresep.png'/>
//         </div>
//         <div class='navteks'>
//           <div class='judul'>Hai</div>
//           Ini adalah
//         </div>
//     </div>

//   <div class='teks'>
//     <img src='assets/img/webresep2.png'/>
//     <div class='judul'>Concept</div>
//     <div class='subteks'>haii</div>
//     <div class='judul'>What it do?</div>
//     <div class='subteks'>haii</div>
//     <div class='judul'>Technologies and Language</div>
//     <div class='subteks'>haii</div>
//   </div>
// </span>

}
echo $hasil;

mysqli_close($conn);
