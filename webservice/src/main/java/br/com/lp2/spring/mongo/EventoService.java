package br.com.lp2.spring.mongo;

import java.util.List;
import org.springframework.context.ApplicationContext;

import br.com.lp2.util.SpringUtil;

public class EventoService {

	private EventoRepository db;
	
	public EventoService() {
		ApplicationContext context=SpringUtil.getContext();
		db = context.getBean(EventoRepository.class);	
	}
	
	public List<Evento> findByNome(String nome){
			return db.findByNome(nome);
	}
	
	public List<Evento> findByData(String data){
		return db.findByData(data);
	}

	public void deleteById(String id){
		db.deleteById(id);
	}

	public void save(Evento evento){
			db.save(evento);
		}
	}