import { Component } from '@angular/core';
import { DataService } from '../data.service';

@Component({
  selector: 'app-published',
  templateUrl: './published.component.html',
  styleUrls: ['./published.component.css']
})
export class PublishedComponent {
dataArray:any;
constructor(private dataService:DataService){}
ngOnInit() {
  this.getData();

 }
   getData() {
     this.dataService. getPublish().subscribe(res => {
       this.dataArray=res;
     });
   }




 }


