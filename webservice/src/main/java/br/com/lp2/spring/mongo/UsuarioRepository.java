package br.com.lp2.spring.mongo;

import java.util.List;
import org.springframework.data.domain.Sort;
import org.springframework.data.mongodb.repository.MongoRepository;
import org.springframework.stereotype.Component;

@Component
public interface UsuarioRepository extends MongoRepository<Usuario, String>{
	
	List<Usuario> findAll(Sort sort);
	List<Usuario> findByNome(String nome);
	void deleteById(String id);
}

