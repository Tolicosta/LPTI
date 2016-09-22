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
import org.springframework.data.domain.Sort;
import org.springframework.data.domain.Sort.Direction;
import org.springframework.data.domain.Sort.Order;
import br.com.lp2.spring.mongo.Membro;
import br.com.lp2.spring.mongo.MembroService;

@Path("/membro")
@Produces(MediaType.APPLICATION_JSON + ";charset=utf-8")
@Consumes(MediaType.APPLICATION_JSON + ";charset=utf-8")

public class MembroResource {

	MembroService service = new MembroService();
	
	@GET
	@Path("/listarTudo")
	public List<Membro> getAllByNome() {
		return service.findAll(new Sort(new Order(Direction.ASC, "nome")));
	}
	
	@GET
	@Path("/procurarTipo/{tipo}")
	public List<Membro> getByTipo(@PathParam("tipo") int tipo) {
		return service.findByTipo(tipo);
	}
	
	@GET
	@Path("/procurarNome/{nome}")
	public List<Membro> getByNome(@PathParam("nome") String nome) {
		return service.findByNome(nome);
	}
	
	@DELETE
	@Path("/deletar/{id}")
	public void delete(@PathParam("id") String id){
		service.deleteById(id);	
	}
	
	@POST
	public void post(Membro membro){
		service.save(membro);
	}
	
	@PUT
	public void put(Membro membro) {
		service.save(membro);
	}

}