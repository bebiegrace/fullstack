import { HttpHeaders } from '@angular/common/http';
import { Component, Input } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { DataService } from '../data.service';

@Component({
  selector: 'app-draft',
  templateUrl: './draft.component.html',
  styleUrls: ['./draft.component.css']
})
export class DraftComponent {
  // @Input() sideNavStatus: boolean = false;
  // sideNavStatus: boolean = false;

  dataArray:any;
  constructor(private dataService:DataService){}
  ngOnInit() {
    this.getData();

   }
     getData() {
       this.dataService. getDraft().subscribe(res => {
         this.dataArray=res;
       });
     }

}




