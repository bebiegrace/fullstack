import { Component, Input } from '@angular/core';

@Component({
  selector: 'app-side-nav',
  templateUrl: './side-nav.component.html',
  styleUrls: ['./side-nav.component.css']
})
export class SideNavComponent {
  @Input() sideNavStatus: boolean = false;


  list1 = [
    {
      number: '1',
      name: 'Home',
      icon: 'fa-solid fa-home',

    },
  ]

  list2= [
    {
      number: '2',
      name: 'Draft',
      icon: 'fa-solid fa-file-arrow-down',
    },
  ]

  list3 = [
    {
      number: '3',
      name: 'Published',
      icon: 'fa-solid fa-upload',
    },
  ]

  list4 = [
    {
      number: '4',
      name: 'Create',
      icon: 'fa-solid fa-plus',
    },
  ]

  list5 =[
    {
      number: '5',
      name: 'Profile',
      icon: 'fa-solid fa-user',
    },
  ]


  // list6 = [
  //   {
  //     number: '6',
  //     name: 'Log Out',
  //     icon: 'fa-solid fa-right-from-bracket',
  //   },
  //   ]

  constructor () {}

  ngOnInit(): void {

  }
}
