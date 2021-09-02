import { Component, OnInit } from '@angular/core';
import { Terapeuta } from './terapeuta';
import { TerapeutaService } from './terapeuta.service';
@Component({
  selector: 'app-terapeutas',
  templateUrl: './terapeutas.component.html',
  styleUrls: ['./terapeutas.component.css']
})
export class TerapeutasComponent implements OnInit {
  titulo:string="lista de terapeutas";
  terapeutas: Terapeuta[] | undefined;
  constructor(private terapeutaService:TerapeutaService) { }
  
  ngOnInit(): void {
    this.terapeutaService.getAll().subscribe(
      t =>this.terapeutas=t
    );
  }
  delete(terapeuta:Terapeuta):void{
    console.log("borrando");
    this.terapeutaService.delete(terapeuta.id).subscribe(
      res=>this.terapeutaService.getAll().subscribe(
        response=>this.terapeutas=response
      )
    );
  }
}
