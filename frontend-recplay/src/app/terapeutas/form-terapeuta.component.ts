import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { Terapeuta } from './terapeuta';
import { TerapeutaService } from './terapeuta.service';

@Component({
  selector: 'app-form-terapeuta',
  templateUrl: './form-terapeuta.component.html',
  styleUrls: ['./form-terapeuta.component.css']
})
export class FormTerapeutaComponent implements OnInit {
  terapeuta: Terapeuta= new Terapeuta();
  titulo: string="Registro de Terapeuta";
  constructor(private terapeutaService:TerapeutaService,private router:Router,private activateRoute:ActivatedRoute) { }

  ngOnInit(): void {
    this.cargar();
  }
  cargar():void{
    this.activateRoute.params.subscribe(
      e=>{
        let id=e['id'];
        if(id){
          this.terapeutaService.get(id).subscribe(
            es=>this.terapeuta=es
          );
        }
      }
    );
    
  }
  create():void{
    console.log(this.terapeuta);
    this.terapeutaService.create(this.terapeuta).subscribe(
      res=>this.router.navigate(['/terapeutas'])
    );
  }

  update():void{
    this.terapeutaService.update(this.terapeuta).subscribe(
      t=>this.router.navigate(['/terapeutas'])
    );
  }
}
