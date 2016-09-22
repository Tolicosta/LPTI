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
import br.com.lp2.spring.mongo.Financeiro;
import br.com.lp2.spring.mongo.FinanceiroService;

@Path("/registroFinanceiro")
@Produces(MediaType.APPLICATION_JSON + ";charset=utf-8")
@Consumes(MediaType.APPLICATION_JSON + ";charset=utf-8")

public class FinanceiroResource {

	FinanceiroService service = new FinanceiroService();
	
	@GET
	@Path("/listarTudo")
	public List<Financeiro> getAllByDataRegistro() {
		return service.findAll(new Sort(new Order(Direction.DESC, "dataRegistro")));
	}
	
	@GET
	@Path("/procurarTipo/{tipo}")
	public List<Financeiro> getByTipo(@PathParam("tipo") boolean tipo) {
		return service.findByTipo(tipo);
	}
	
	@GET
	@Path("/procurarData/data/{data}")
	public List<Financeiro> getByData(@PathParam("data") String data) {
		return service.findByData(data);
	}

	
	@DELETE
	@Path("/deletar/{id}")
	public void delete(@PathParam("id") String id){
		service.deleteById(id);	
	}
	
	@POST
	public void post(Financeiro financeiro){
		service.save(financeiro);
	}
	
	@PUT
	public void put(Financeiro financeiro) {
		service.save(financeiro);
	}

}