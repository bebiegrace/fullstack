import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Component, EventEmitter, Input, OnInit, Output } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';

@Component({
  selector: 'app-create',
  templateUrl: './create.component.html',
  styleUrls: ['./create.component.css']
})


export class CreateComponent implements OnInit {
  form2!: FormGroup;
  menuStatus: any;

  menuStatus1:boolean = false;

  constructor(private fb: FormBuilder, private http: HttpClient, private route: ActivatedRoute, private router: Router) {

  }

  ngOnInit(): void {
    this.form2= this.fb.group({
      title: '',
      content: '',
      // password: '',
      // user_type:'',
        });
  }



  ngOnInit1(): void {

  }


  submit() {
    console.log('submit', this.form2.value);
    const headers = new HttpHeaders({
       'Content-Type': 'application/json',
       'Authorization': 'Bearer ' + localStorage.getItem('token')
      });
    this.http.post('http://127.0.0.1:8000/api/createdraft', this.form2.value,{headers: headers} ).subscribe(
      result => {
        console.log('success')
        this.router.navigate(['draft']);
        console.log(result);
      },
      error => {
        console.log('error')
        console.log(error);
      }
    );

  }

  submit1() {
    console.log('submit', this.form2.value);
    const headers = new HttpHeaders({
       'Content-Type': 'application/json',
       'Authorization': 'Bearer ' + localStorage.getItem('token')
      });
    this.http.post('http://127.0.0.1:8000/api/storepublish', this.form2.value,{headers: headers} ).subscribe(
      result => {
        console.log('success')
        this.router.navigate(['publishedv']);
        console.log(result);
      },
      error => {
        console.log('error')
        console.log(error);
      }
    );

  }




}
