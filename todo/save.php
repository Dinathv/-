<?php
require_once('db_conn.php');

if (isset($_SESSION['id'])) {
    echo'<p class="mt-1"><a href="assets/php/logout.php">Выйти</a> &middot; <a href="#" id="saveEnum"></a></p>';

	$user_id= $_SESSION['id'];
	$sql = "SELECT * FROM save WHERE id_users = '".$user_id."'";
	$stmt= $conn->prepare($sql);
	$stmt->execute();
	$result= $stmt->fetchAll();
	$nRows = $conn->query($sql)->rowCount(); 
	if ($result && $nRows> 0) {
	    echo '<div class="modal" tabindex="-1" role="dialog" id="historyModal">';
	    echo '    <div class="modal-dialog" role="document">';
	    echo '        <div class="modal-content p-5">';
	    echo '            <h1 class="h3 mb-3 fw-normal">Прошлая история</h1>';
	    echo '                 <ol>';
		for ($i = 0; $i < ($nRows); $i++) {
		    echo '<li>'.$result[$i]['history'].'</li>';
		}
	    echo '                 </ol>';
	    echo '        </div>';
	    echo '    </div>';
	    echo '</div>';

	} else {
	echo '<div class="modal" tabindex="-1" role="dialog" id="NohistoryModal">';
	echo '    <div class="modal-dialog" role="document">';
	echo '        <div class="modal-content p-5">';
	echo '            <h1 class="h3 mb-3 fw-normal">Прошлая история</h1>';
	echo "            Ваша история пуста";
	echo '        </div>';
	echo '    </div>';
	echo '</div>';
	}
	
}
exit();
?>
