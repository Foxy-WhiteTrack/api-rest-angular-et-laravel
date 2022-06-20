import { Component, OnInit } from '@angular/core';
import { DataService } from 'src/app/service/data.service';
import { Product } from 'src/app/product';

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.css']
})
export class ProductsComponent implements OnInit {
  products: any;
  product = new Product;

  constructor(private dataService: DataService) { }

  ngOnInit(): void {
    this.getProductData();
  }

  getProductData() {
    console.log('liste des produits');
    this.dataService.getData().subscribe(res => {
      console.log(res);
      this.products = res;
    })
  }
  insertData() {
    //console.log(this.product);
    this.dataService.insertData(this.product).subscribe(res => {
      this.getProductData();
      //console.log(res);
      //this.products = res;
    })
  }
  deleteData(id: any) {
    //console.log(id);
    this.dataService.deleteData(id).subscribe(res => {
      this.getProductData();
      //console.log(res);
      //this.products = res;
    })
  }

}
