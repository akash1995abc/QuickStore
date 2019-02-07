import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-booklist',
  templateUrl: './booklist.component.html',
  styleUrls: ['./booklist.component.css']
})
export class BooklistComponent implements OnInit {
public BookDetails:any=[{author:"author1",publisher:"publisher1"},
{author:"author2",publisher:"publisher2"},
{author:"author3",publisher:"publisher3"}];
sellbook:any;
addBook(data:any){
      this.sellbook=data;
}
  constructor() { }

  ngOnInit() {
  }

}
