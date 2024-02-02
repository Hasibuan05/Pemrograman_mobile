import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ToastController } from '@ionic/angular';
import { PostProvider } from '../../providers/post-provider';
@Component({
 selector: 'app-tab2',
 templateUrl: 'tab2.page.html',
 styleUrls: ['tab2.page.scss']
})
export class Tab2Page implements OnInit {
  Kelurahan: string = '';
  Tps: string = '';
  Nama: string = '';
  Nik: string = '';
  Tanggal_lahir: string = '';
  Usia: string = '';
  Jenis_kelamin: string = '';
  Referensi: string = '';
 constructor(
 private router: Router,
 public toastController: ToastController,
 private postPvdr: PostProvider,
 ) { 
 }
 
  ngOnInit() {
  }
  async addRegister() {
  if (this.Kelurahan == '') {
  const toast = await this.toastController.create({
  message: 'Kelurahan harus di isi',
  duration: 2000
  });
  toast.present();
  } else if (this.Tps == '') {
  const toast = await this.toastController.create({
  message: 'Tps harus di isi',
  duration: 2000
  });
  toast.present();
  } else if (this.Nama == '') {
  const toast = await this.toastController.create({
  message: 'Nama harus di isi',
  duration: 2000
  });
  toast.present();
  } else if (this.Nik == '') {
  const toast = await this.toastController.create({
  message: 'Nik harus di isi',
  duration: 2000
  });
  toast.present();
  } else if (this.Tanggal_lahir == '') {
  const toast = await this.toastController.create({
  message: 'Tanggal lahir harus di isi',
  duration: 2000
  });
  toast.present();
  } else if (this.Usia == '') {
  const toast = await this.toastController.create({
  message: 'Usia harus di isi',
  duration: 2000
  });
  toast.present();
  } else if (this.Jenis_kelamin == '') {
  const toast = await this.toastController.create({
  message: 'Jenis kelamin harus di isi',
  duration: 2000
  });
  toast.present();
  } else if (this.Referensi == '') {
  const toast = await this.toastController.create({
  message: 'Referensi harus di isi',
  duration: 2000
  });
  toast.present();
  } else {
  let body = {
    Kelurahan: this.Kelurahan,
    Tps: this.Tps,
    Nama: this.Nama,
    Nik: this.Nik,
    Tanggal_lahir: this.Tanggal_lahir,
    Usia: this.Usia,
    Jenis_kelamin: this.Jenis_kelamin,
    Referensi: this.Referensi,
  aksi: 'add_register'
  };
  this.postPvdr.postData(body, 'action.php').subscribe(async data => {
  var alertpesan = data.msg;
  if (data.success) {
  this.router.navigate(['/tab4']);
  const toast = await this.toastController.create({
    message: 'Selamat! Registrasi Pendukung Caleg sukses.',
    duration: 2000
    });
    toast.present();
    } else {
    const toast = await this.toastController.create({
    message: alertpesan,
    duration: 2000
    });
    }
    });
    }
    }
    
    showpemilu() {
    this.router.navigate(['/showpemilu']);
    }

  } 
