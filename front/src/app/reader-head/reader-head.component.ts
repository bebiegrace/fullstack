import { Component, OnInit, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'app-reader-head',
  templateUrl: './reader-head.component.html',
  styleUrls: ['./reader-head.component.css']
})
export class ReaderHeadComponent implements OnInit {

  @Output() readNavToggled = new EventEmitter<boolean>();
  menuStatus:boolean = false;

  constructor () {}

  ngOnInit(): void {

  }

  ReadNavToggle(){
    this.menuStatus = !this.menuStatus;
    this.readNavToggled.emit(this.menuStatus);
  }

}
