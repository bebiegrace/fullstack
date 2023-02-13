import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-reader-view',
  templateUrl: './reader-view.component.html',
  styleUrls: ['./reader-view.component.css']
})
export class ReaderViewComponent {
  @Input() sideNavStatus: boolean = false;
}
