import { Component} from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { FormBuilder, FormControl, FormGroup } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { first } from 'rxjs/internal/operators/first';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent {

  form3!: FormGroup;


  constructor(private fb: FormBuilder, private http: HttpClient, private route: ActivatedRoute, private router: Router) {

  }

  ngOnInit(): void {
    this.form3= this.fb.group({
      email: '',
      password: ''
        });
  }

  submit() {
    console.log('submit', this.form3.value);
    this.http.post('http://127.0.0.1:8000/api/login', this.form3.value).subscribe(
      (result:any )=> {
        if (result.token != null){
          console.log('success')
          localStorage.setItem('token', result.token);
          this.router.navigate(['writer-view']);
          console.log(result);
        }

      },
      error => {
        console.log('error')
        console.log(error);
      }
    );
}
}
