$(document).ready(function () {
	ambilDataPost();
	setInterval(ambilDataPost, 2000);
	// $('.tambah-chat').click(function(){
	// 	setInterval(1000);
	// 	var data =$('.form-user').serialize();
	// 	$.ajax({
	// 		type:'POST',
	// 		url:'http://localhost:8080/Chat/input_chat',
	// 		data:data,
	// 		success:function(){
	// 			ambilDataChat();
	// 		}
	// 	})
	// })
	
	
	function ambilDataPost() {
		
		$.ajax({
			type: 'POST',
			url: 'http://localhost:8080/Admin/Post/ambilDataPost',
			dataType: 'json',
			success: function (data) {
				var baris = '';
                var status ='';
                var ind ='';
                var ind1 ='';
                baris='<table id="example1" class="table table-striped" style="font-size:13px;">'
                +'<thead>'+
                '<tr>' +
                  '<th style="width:100px;">#</th>' +
                  '<th>Tugas</th>' +
                  '<th>Status</th>' +
                  '<th style="text-align:right;">Aksi</th>' +
                '</tr>' +
              '</thead>' + '<tbody>';
				for (var i = 0; i < data.length; i++) {
                    if (data[i].status == 1) {
                           status = '<button style="color:white;background-color:green" data-toggle="modal" data-target=#ModalOnOff' + data[i].id + '>ON</button>';
                           ind = 'ON';
                           ind1 = 'OFF';
                          } else {
                            status = '<button style="color:white;background-color:red" data-toggle="modal" data-target=#ModalOnOff' + data[i].id + '>OFF</button>';
                            ind1 = 'ON';
                            ind = 'OFF';
                          }
                          
					baris +=
                    
                    '<tr>' +
                    '<td>' + (i+1) + '</td>' +
                    '<td>' + data[i].judul + '</td>' +
                    '<td>' + 
                    status + 
                    '</td>' +

                    '<td style="text-align:right;">' +
                        '<a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id; ?>"><span class="fa fa-pencil"></span></a>' +
                        '<a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id; ?>"><span class="fa fa-trash-o fa-lg"></span></a>' +
                        '</td>' +
                    '</tr>' 
						
				}
                baris=baris+'</tbody>'+'</table>';
                
				$('#tabel-post').html(baris);
			},
		});
	}

	
});


// <?php
// $no = 0;
// foreach ($results as $nilai) :
//   $no++;
//   $id = $nilai['id'];
//   $ind = '';
//   $ind1 = '';
//   if ($nilai['status'] == 1) {
//     $status = '<button style="color:white;background-color:green" data-toggle="modal" data-target=#ModalOnOff' . $id . '>ON</button>';
//     $ind = 'ON';
//     $ind1 = 'OFF';
//   } else {
//     $status = '<button style="color:white;background-color:red" data-toggle="modal" data-target=#ModalOnOff' . $id . '>OFF</button>';
//     $ind1 = 'ON';
//     $ind = 'OFF';
//   }
//   $judul = $nilai['judul'];
// ?>
//   <tr>
//     <td><?php echo $no; ?></td>
//     <td><?php echo $judul; ?></td>
//     <td><?php echo $status; ?></td>

//     <td style="text-align:right;">
//       <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id; ?>"><span class="fa fa-pencil"></span></a>
//       <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id; ?>"><span class="fa fa-trash-o fa-lg"></span></a>
//     </td>
//   </tr>

//   <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
//     <div class="modal-dialog" role="document">
//       <div class="modal-content">
//         <div class="modal-header">
//           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
//           <h4 class="modal-title" id="myModalLabel">Hapus Tugas</h4>
//         </div>
//         <form class="form-horizontal" action="<?php base_url(); ?>/admin/post/hapusPost" method="post" enctype="multipart/form-data">
//           <div class="modal-body">
//             <input type="hidden" name="kode" value="<?php echo $id; ?>" />
//             <p>Apakah Anda yakin mau menghapus Tugas <b><?php echo $judul; ?></b> ?</p>
//           </div>
//           <div class="modal-footer">
//             <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
//             <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
//           </div>
//         </form>
//       </div>
//     </div>
//   </div>


//   <div class="modal fade" id="ModalOnOff<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
//     <div class="modal-dialog" role="document">
//       <div class="modal-content">
//         <div class="modal-header">
//           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
//           <h4 class="modal-title" id="myModalLabel">Switch</h4>
//         </div>
//         <form class="form-horizontal" action="<?php base_url(); ?>/admin/post/ubahStatus" method="post" enctype="multipart/form-data">
//           <div class="modal-body">
//             <input type="hidden" name="kode" value="<?php echo $id; ?>" />
//             <input type="hidden" name="status" value="<?php echo $ind1; ?>" />
//             <p>Apakah Anda yakin ingin mengubah Status <b><?= $ind ?></b> menjadi <b><?php echo $ind1; ?></b> ?</p>
//           </div>
//           <div class="modal-footer">
//             <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
//             <button type="submit" class="btn btn-primary btn-flat" id="simpan">Ubah</button>
//           </div>
//         </form>
//       </div>
//     </div>
//   </div>
// <?php endforeach; ?>

{/* <table id="example1" class="table table-striped" style="font-size:13px;">
                  <thead>
                    <tr>
                      <th style="width:100px;">#</th>
                      <th>Tugas</th>
                      <th>Status</th>
                      <th style="text-align:right;">Aksi</th>
                    </tr>
                  </thead>
        <tbody id=tabel-post>

        </tbody>
</table> */}