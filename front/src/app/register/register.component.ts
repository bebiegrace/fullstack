import { HttpClient } from '@angular/common/http';
import { Component } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent {
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
    this.http.post('http://127.0.0.1:8000/api/storewriter', this.form.value).subscribe(
      result => {
        console.log('success')
        this.router.navigate(['writer-login']);
        console.log(result);
      },
      error => {
        console.log('error')
        console.log(error);
      }
    );

  }
}
