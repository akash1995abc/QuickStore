import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit {
  user:any;
  check:boolean;
    
    
  constructor() {

    this.user=
    {
      name:'Akash',
      Address:'Abc House',
      job:'Softwaredeveloper'
      
    };
   
   }
   togglecheck(){

    this.check=!this.check;
  }

  ngOnInit() {
  }

}
