@extends('user-profile.profile')

@section('contentProfile')
      <!-- profile section starts  -->
      <section class="user-profile">

        <h1 class="heading">.</h1>
        
        <div class="info">
         <div class="judul">
            <h1>Profil Saya</h1>
            <h3>Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</h3>
         </div>
         @if (session('success'))
            <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
         @if ($errors->any())
            <div class="alert alert-warning border-left-warning alert-dismissible fade show" role="alert">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                <button type="button" class="close mb-4" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
         </div>

         <div class="info">
          
               <!-- <div class="title">
                 Registration Form
               </div> -->

            <div class="form">
            <form action="{{ route('user-profile.update', [$user->id]) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $user->id }}">
           
                   <div class="inputfield">
                     <label>Nama</label>
                     <input type="text" class="input" value="{{ $user->name }}" name="name">
                  </div> 
                  <div class="inputfield">
                     <label>Email</label>
                     <input type="email" class="input" value="{{ $user->email }}" name="email">
                  </div>  

                 

                   <div class="inputfield">
                     <label>Jenis Kelamin</label>
                     <div class="custom_select">
                       <select name="jenisKelamin" >
                         <option>-- Pilih --</option>
                         <option value="1" @if (old('jenisKelamin', $user->jenisKelamin) == 1) selected @endif>Laki-Laki</option>
                         <option value="2" @if (old('jenisKelamin', $user->jenisKelamin) == 2) selected @endif>Perempuan</option>
                       </select>
                     </div>
                  </div> 
                  
                 <div class="inputfield">
                     <label>Nomor Hp</label>
                     <input type="text" class="input" value="{{ $user->nohp }}" name="nohp">
                  </div> 
                 <div class="inputfield">
                     <label>Alamat</label>
                     <textarea class="textarea" name="alamat">{{ $user->alamat }}</textarea>
                  </div> 
                 <div class="inputfield">
                     <label>Kode Pos</label>
                     <input type="text" class="input" value="{{ $user->kodepos }}" name="kodepos">
                  </div> 
                 {{-- <div class="inputfield terms">
                     <label class="check">
                       <input type="checkbox">
                       <span class="checkmark"></span>
                     </label>
                     <p>Saya bersaksi data yang di inputkan benar</p>
                  </div>  --}}
                 <div class="inputfield">
                   <input type="submit" value="Submit" class="btn">
                 </div>
               </div>
            </form>

           

           <div class="user">
            
              {{-- <img src="{{ asset('storage/images/profile-images/users/'.$user->image) }}" alt=""> --}}
           

              <div class="profile-pic mt-3">
               <label class="-label" for="file-admin-img">
                 <span class="glyphicon glyphicon-camera"></span>
                 <span>Ganti Gambar</span>
               </label>
               <input id="file-admin-img" type="file" name="imgUpload" class="upload-img" accept=".jpeg,.png,.jpg,.svg" />
               <img src="{{asset('storage/images/profile-images/users/'.$user->image)}}" class="shadow" id="output-img" width="200" alt="profile_img"/>
            </div>
            <h3>sayyid</h3>
            <p>User</p>
              
              <!-- <input type="submit" value="Submit" name="submit" class="btn"> -->
              <!-- <a href="update.html" class="inline-btn">Pilih Gambar</a> -->
              <p>Ukuran gambar: maks. 1 MB
               Format gambar: .JPEG, .PNG</p>
           </div>
        </div>

     </section>

    <!-- profile section ends -->

    <script> 
    document.addEventListener('change', function (event) {
      if (event.target.matches('.upload-img')) {
        console.log(event);
        var image = event.target.nextSibling.nextSibling;
        image.src = URL.createObjectURL(event.target.files[0]);
      } 
    });
 </script>
@endsection