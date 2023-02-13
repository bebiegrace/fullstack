import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Register } from './register.model';



@Injectable({
  providedIn: 'root'
})
export class DataService {
  [x: string]: any;
  user:any;
  constructor(private http:HttpClient) { }


//  url= 'http://127.0.0.1:8000/api/registerme';
//  constructor(private http:HttpClient) { }

 getRegister(link:string){
return this.http.get(link);
 }

 saveUserData(data:any){
  console.log(data);
 }


//Draft

getUser(){
  const headers = new HttpHeaders({
    'Authorization':`Bearer ${localStorage.getItem('token')}`
  })
  return this.http.get('http://127.0.0.1:8000/api/user',{headers:headers}).subscribe(result=>this.user.result)
 }

getDraft(){
  return this.http.get('http://127.0.0.1:8000/api/drafts')
 }
 fetchDraft(){
  return this.http.get('http://127.0.0.1:8000/api/fetchdraft/{id}')
 }

 deleteDraft(){
  return this.http.get('http://127.0.0.1:8000/api/deletedraft')
 }

 updateDraft(){
  return this.http.get('http://127.0.0.1:8000/api/updatedraft')
 }

 //Publish

 getPublish(){
  return this.http.get('http://127.0.0.1:8000/api/published')
 }

 fetchPublish(){
  return this.http.get('http://127.0.0.1:8000/api/fetchpublish')
 }
 deletePublish(){
  return this.http.get('http://127.0.0.1:8000/api/deletepublish')
 }
 updatePublish(){
  return this.http.get('http://127.0.0.1:8000/api/updatepublish')
 }

}
