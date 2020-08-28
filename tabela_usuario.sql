create table public.tabela_usuario
(
	id serial not null
		constraint login_pk
			primary key,
	email varchar not null,
	senha varchar not null,
	nome varchar
);

alter table public.tabela_usuario owner to postgres;

create unique index login_id_uindex
	on public.tabela_usuario (id);

