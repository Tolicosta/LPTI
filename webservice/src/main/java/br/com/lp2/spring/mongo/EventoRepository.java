package br.com.lp2.spring.mongo;

import java.util.List;

import org.springframework.data.mongodb.repository.MongoRepository;
import org.springframework.stereotype.Component;

@Component
public interface EventoRepository extends MongoRepository<Evento, String>{
	
	List<Evento> findByData(String data);
	List<Evento> findByNome(String nome);
	void deleteById(String id);
}

