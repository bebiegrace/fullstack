import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { FormBuilder, FormControl, FormGroup } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';

@Component({
  selector: 'app-user-register',
  templateUrl: './user-register.component.html',
  styleUrls: ['./user-register.component.css']
})


export class UserRegisterComponent implements OnInit {



    form!: FormGroup;


    constructor(private fb: FormBuilder, private http: HttpClient, private route: ActivatedRoute, private router: Router) {

    }

    ngOnInit(): void {
      this.form= this.fb.group({
        name: '',
        email: '',
        password: '',
        // user_type:'',
          });
    }

    submit() {
      console.log('submit', this.form.value);
      this.http.post('http://127.0.0.1:8000/api/storereader', this.form.value).subscribe(
        result => {
          console.log('success')
          this.router.navigate(['reader-login']);
          console.log(result);
        },
        error => {
          console.log('error')
          console.log(error);
        }
      );

    }

}
