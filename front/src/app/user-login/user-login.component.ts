

// @Component({
//   selector: 'app-user-login',
//   templateUrl: './user-login.component.html',
//   styleUrls: ['./user-login.component.css']
// })
// export class UserLoginComponent {

// }

import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { FormBuilder, FormControl, FormGroup } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { first } from 'rxjs/internal/operators/first';


@Component({
  selector: 'app-user-login',
  templateUrl: './user-login.component.html',
  styleUrls: ['./user-login.component.css']
})
export class UserLoginComponent{

  form1!: FormGroup;


  constructor(private fb: FormBuilder, private http: HttpClient, private route: ActivatedRoute, private router: Router) {

  }

  ngOnInit(): void {
    this.form1= this.fb.group({
      email: '',
      password: ''
        });
  }

  submit() {
    console.log('submit', this.form1.value);
    this.http.post('http://127.0.0.1:8000/api/login-reader', this.form1.value).subscribe(
      result => {
        console.log('success')
        this.router.navigate(['/reader-view']);
        console.log(result);
      },
      error => {
        console.log('error')
        console.log(error);
      }
    );

  }
}

