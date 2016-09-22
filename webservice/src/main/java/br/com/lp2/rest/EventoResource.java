package br.com.lp2.rest;

import java.util.List;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

import br.com.lp2.spring.mongo.Evento;
import br.com.lp2.spring.mongo.EventoService;

@Path("/evento")
@Produces(MediaType.APPLICATION_JSON + ";charset=utf-8")
@Consumes(MediaType.APPLICATION_JSON + ";charset=utf-8")

public class EventoResource {

	EventoService service = new EventoService();
	
	@GET
	@Path("/procurarData/{data}")
	public List<Evento> getByData(@PathParam("data") String data) {
		return service.findByData(data);
	}
	
	@GET
	@Path("/procurarNome/{nome}")
	public List<Evento> getByNome(@PathParam("nome") String nome) {
		return service.findByNome(nome);
	}
	
	@DELETE
	@Path("/deletar/{id}")
	public void delete(@PathParam("id") String id){
		service.deleteById(id);	
	}
	
	@POST
	public void post(Evento evento){
		service.save(evento);
	}
	
	@PUT
	public void put(Evento evento) {
		service.save(evento);
	}

}